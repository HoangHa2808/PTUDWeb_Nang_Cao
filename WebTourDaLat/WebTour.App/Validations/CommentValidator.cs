//using FluentValidation;
//using WebTour.Services.Blogs;
//using WebTour.WebApp.Areas.Admin.Models;

//namespace WebTour.WebApp.Validations
//{
//    public class CommentValidator : AbstractValidator<CommentEditModel>
//    {
//        private readonly IBlogRepository _blogRepository;

//        public CommentValidator(IBlogRepository blogRepository)
//        {
//            _blogRepository = blogRepository;

//            RuleFor(x => x.Name)
//                .NotEmpty()
//                .WithMessage("Bạn phải thêm chủ đề cho bài viết")
//                .MaximumLength(500)
//                .WithMessage("Chủ đề quá dài !!!!!");

//            RuleFor(x => x.Description)
//                .NotEmpty()
//                .WithMessage("Bạn phải thêm giới thiệu cho bài viết");
//        }
//    }
//}