using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class Posts : IEntity
    {
        public int Id { get; set; }

        // Tiêu đề bài viết
        public string Title { get; set; }

        // Hành trình
        public string Schedule { get; set; }

        // Thời gian của tour
        public string Timetable { get; set; }

        //Giá khách sạn
        public float Prices { get; set; }

        // Mô tả hay giới thiệu ngắn về nội dung
        public string ShortDescription { get; set; }

        //Nội dung chi tiết tour
        public string Description { get; set; }

        // Metadata
        public string Meta { get; set; }

        // Tên định danh để tạo URL
        public string UrlSlug { get; set; }

        // Đường dẫn đến tập tin hình ảnh
        public string ImageUrl { get; set; }

        // Số lượt xem, đọc bài viết
        public int ViewCount { get; set; }

        // Trạng thái của bài viết
        public bool Published { get; set; }

        // Ngày giờ đăng bài
        public DateTime PostedDate { get; set; }

        // Ngày giờ cập nhật lần cuối
        public DateTime? ModifiedDate { get; set; }

        // Mã chủ đề
        public int CategoryId { get; set; }

        // Chủ đề bài viết
        public PostsType PostsType { get; set; }

        public Category Category { get; set; }

        // Danh sách từ khoá của bài viết
        public IList<Tag> Tags { get; set; }

        public IList<Feedback> Feedbacks { get; set; }
    }
}