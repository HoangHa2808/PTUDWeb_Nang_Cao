using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class User : IEntity
    {
        public int Id { get; set; }

        // Tên người dùng/ quản lý
        public string FullName { get; set; }

        // Địa chỉ Email
        public string Email { get; set; }

        // Tên định danh để tạo URL
        public string UrlSlug { get; set; }

        // Tên đăng nhập/ đăng ký
        public string Username { get; set; }

        // Mật khẩu
        public string Password { get; set; }

        // Ghi chú
        public string Notes { get; set; }
    }
}