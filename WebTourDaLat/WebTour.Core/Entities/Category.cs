using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class Category : IEntity
    {
        public int Id { get; set; }

        // Tên chủ đề
        public string Name { get; set; }

        // Tên định danh dùng để tạo URL
        public string UrlSlug { get; set; }

        // Mô tả thêm chủ đề
        public string Description { get; set; }

        // Đánh dấu chủ đề được hiển thị trên Menu
        public bool ShowOnMenu { get; set; }

        // Danh sách các bài viết thuộc chủ đề
        public IList<Posts> Posts { get; set; }
    }
}