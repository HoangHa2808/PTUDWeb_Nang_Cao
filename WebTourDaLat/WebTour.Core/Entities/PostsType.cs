using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class PostsType : IEntity
    {
        public int Id { get; set; }

        // Tên loại
        public string Name { get; set; }

        // Tên định danh dùng để tạo URL
        public string UrlSlug { get; set; }

        // Mô tả loại
        public string Description { get; set; }

        // Danh sách các bài viết thuộc chủ đề
        public IList<Posts> Posts { get; set; }
    }
}