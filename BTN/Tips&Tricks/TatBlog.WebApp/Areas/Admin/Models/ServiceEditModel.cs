//using Microsoft.AspNetCore.Mvc.Rendering;
//using Microsoft.Build.Framework;
//using System.ComponentModel;
//using System.ComponentModel.DataAnnotations;
//using RequiredAttribute = System.ComponentModel.DataAnnotations.RequiredAttribute;

//namespace TatBlog.WebApp.Areas.Admin.Models
//{
//    public class ServiceEditModel
//    {
//        public int Id { get; set; }

//        [DisplayName("Họ")]
//        [Required(ErrorMessage = "Họ không được để trống")]
//        [MaxLength(500, ErrorMessage = "Họ tối đa 100 ký tự")]
//        public string LastName { get; set; }

//        [DisplayName("Tên")]
//        [Required(ErrorMessage = "Tên không được để trống")]
//        [MaxLength(500, ErrorMessage = "Tên tối đa 100 ký tự")]
//        public string FirstName { get; set; }

//        [DisplayName("Email")]
//        [Required(ErrorMessage = "Email không được để trống")]
//        [MaxLength(2000, ErrorMessage = "Email tối đa 2000 ký tự")]
//        public string Email { get; set; }

//        [DisplayName("Username")]
//        [Required(ErrorMessage = "Username không được để trống")]
//        [MaxLength(5000, ErrorMessage = "Username tối đa 5000 ký tự")]
//        public string Username { get; set; }

//        [DisplayName("Mật khẩu")]
//        [Required(ErrorMessage = "Mật khẩu không được để trống")]
//        [MaxLength(200, ErrorMessage = "Mật khẩu tối đa 200 ký tự")]
//        public string Password { get; set; }

//        [DisplayName("Chọn hình ảnh")]
//        public IFormFile ImageFile { get; set; }

//        [DisplayName("Hình hiện tại")]
//        public string ImageUrl { get; set; }

//        //[DisplayName("Từ khoá (mỗi từ 1 dòng)")]
//        //[Required(ErrorMessage = "Bạn chưa nhập tên thẻ")]
//        public string SelectedTags { get; set; }

//        // Tách chuỗi chứa các thẻ thành một mảng các chuỗi
//        public List<string> GetSelectedTags()
//        {
//            return (SelectedTags ?? "")
//                 .Split(new[] { ',', ';', '\r', '\n' },
//                     StringSplitOptions.RemoveEmptyEntries)
//                 .ToList();
//        }
//    }
//}
