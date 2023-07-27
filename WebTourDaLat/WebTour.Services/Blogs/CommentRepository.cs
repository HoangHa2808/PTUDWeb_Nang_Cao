using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Caching.Memory;
using WebTour.Services.Extensions;
using WebTour.Core.DTO;
using WebTour.Core.Contracts;
using WebTour.Core.Entities;
using WebTour.Data.Contexts;

namespace WebTour.Services.Blogs
{
    public class CommentRepository
    {
        private readonly BlogDbContext _context;
        private readonly IMemoryCache _memoryCache;

        public CommentRepository(BlogDbContext context, IMemoryCache memoryCache)
        {
            _context = context;
            _memoryCache = memoryCache;
        }

        // Tìm 1 bình luận theo mã số
        public async Task<Comment> GetCommentByIDAsync(
        int id,
            CancellationToken cancellationToken = default)
        {
            return await _context.Set<Comment>()
                        .Where(x => x.Id == id)
                        .FirstOrDefaultAsync(cancellationToken);
        }

        public async Task<Comment> GetCachedCommentByIdAsync(int commentId)
        {
            return await _memoryCache.GetOrCreateAsync(
                $"comment.by-id.{commentId}",
                async (entry) =>
                {
                    entry.AbsoluteExpirationRelativeToNow = TimeSpan.FromMinutes(30);
                    return await GetCommentByIDAsync(commentId);
                });
        }

        // Thêm hoặc cập nhật một bình luận
        public async Task<Comment> CreateOrUpdateCommentAsync(
            Comment comment, CancellationToken cancellationToken = default)
        {
            if (comment.Id > 0)
            {
                _context.Set<Comment>().Update(comment);
            }
            else
            {
                _context.Set<Comment>().Add(comment);
            }

            await _context.SaveChangesAsync(cancellationToken);

            return comment;
        }

        public async Task<bool> AddOrUpdateCommentAsync(
                Comment comment,
                CancellationToken cancellationToken = default)
        {
            if (comment.Id > 0)
            {
                _context.Comments.Update(comment);
                _memoryCache.Remove($"author.by-id.{comment.Id}");
            }
            else
            {
                _context.Comments.Add(comment);
            }

            return await _context.SaveChangesAsync(cancellationToken) > 0;
        }

        public async Task<bool> ChangeCommentByIdAsync(
            int id, CancellationToken cancellationToken = default)
        {
            return await _context.Set<Comment>()
                .Where(comment => comment.Id == id)
                .ExecuteUpdateAsync(x => x.SetProperty(comment => comment.IsApproved, comment => !comment.IsApproved), cancellationToken) > 0;
        }

        public async Task<IPagedList<Comment>> GetPagedCommentAsync(
            int pageNumber = 1,
        int pageSize = 10,
            CancellationToken cancellationToken = default)
        {
            var commentQuery = _context.Set<Comment>();

            return await commentQuery.ToPagedListAsync(
                pageNumber, pageSize,
                nameof(Comment.Name), "DESC",
                cancellationToken);
        }

        public async Task<IPagedList<Comment>> GetPagedCommentsAsync(
                IPagingParams pagingParams,
                string name = null,
                CancellationToken cancellationToken = default)
        {
            return await _context.Set<Comment>()
                .AsNoTracking()
                .WhereIf(!string.IsNullOrWhiteSpace(name),
                    x => x.Name.Contains(name))
                .Select(a => new Comment()
                {
                    Id = a.Id,
                    Name = a.Name,
                    Description = a.Description,
                    PostedDate = a.PostedDate,
                    PostId = a.PostId
                })
                .ToPagedListAsync(pagingParams, cancellationToken);
        }

        public async Task<IList<Comment>> GetPostCommentsAsync(int commentId, CancellationToken cancellationToken = default)
        {
            return await _context.Set<Comment>()
                .Where(c => c.PostId == commentId && c.IsApproved)
                .ToListAsync(cancellationToken);
        }

        public async Task<bool> DeleteCommentByIdAsync(
        int commentId,
            CancellationToken cancellationToken = default)
        {
            return await _context.Comments
               .Where(x => x.Id == commentId)
               .ExecuteDeleteAsync(cancellationToken) > 0;
        }

        public async Task<bool> ToggleApprovedFlagAsync(
        int commentId,
          CancellationToken cancellationToken = default)
        {
            var comment = await _context.Set<Comment>().FindAsync(commentId);
            if (comment is null) return false;
            comment.IsApproved = !comment.IsApproved;
            await _context.SaveChangesAsync(cancellationToken);
            return comment.IsApproved;
        }

        public async Task<bool> IsCommentExistedAsync(
       int commentId,
        string slug,
       CancellationToken cancellationToken = default)
        {
            return await _context.Set<Comment>()
                .AnyAsync(x => x.Id != commentId && x.Description == slug, cancellationToken);
        }
    }
}