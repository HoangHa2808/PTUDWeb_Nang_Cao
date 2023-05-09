using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;
using WebTour.Core.Entities;

namespace WebTour.Services.Blogs
{
    public interface ICommentRepository
    {
        Task<IPagedList<Comment>> GetPagedCommentAsync(
            int pageNumber = 1,
            int pageSize = 10,
            CancellationToken cancellationToken = default);

        // Tìm 1 bình luận theo mã số
        Task<Comment> GetCommentByIDAsync(int id, CancellationToken cancellationToken = default);

        Task<Comment> GetCachedCommentByIdAsync(int commentId);

        // 1.g: Thêm hoặc cập nhật một bình luận
        Task<Comment> CreateOrUpdateCommentAsync(
        Comment comment, CancellationToken cancellationToken = default);

        Task<bool> AddOrUpdateCommentAsync(
            Comment comment,
            CancellationToken cancellationToken = default);

        Task<bool> ChangeCommentByIdAsync(
        int id, CancellationToken cancellationToken = default);

        Task<IPagedList<Comment>> GetPagedCommentsAsync(
            IPagingParams pagingParams,
            string name = null,
            CancellationToken cancellationToken = default);

        Task<IList<Comment>> GetPostCommentsAsync(
            int commentId, CancellationToken cancellationToken = default);

        Task<bool> DeleteCommentByIdAsync(int commentId,
        CancellationToken cancellationToken = default);

        Task<bool> ToggleApprovedFlagAsync(int commentId,
        CancellationToken cancellationToken = default);

        Task<bool> IsCommentExistedAsync(
           int commentId,
           string slug,
           CancellationToken cancellationToken = default);
    }
}