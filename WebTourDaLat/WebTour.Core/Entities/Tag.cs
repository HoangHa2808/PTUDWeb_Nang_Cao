using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class Tag : IEntity
    {
        public int Id { get; set; }

        // Nội dung từ khoá
        public string Name { get; set; }

        // Tên định danh dùng để tạo URL
        public string UrlSlug { get; set; }

        // Mô tả thêm về từ khoá
        public string Description { get; set; }

        // Danh sách các bài viết có chứa từ khoá
        public IList<Posts> Posts { get; set; }
    }
}