using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class Services : IEntity
    {
        public int Id { get; set; }
        public string Title { get; set; }

        // Tên định danh dùng để tạo URL
        public string UrlSlug { get; set; }

        public string Description { get; set; }
    }
}