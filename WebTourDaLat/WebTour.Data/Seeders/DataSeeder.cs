using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Entities;
using WebTour.Data.Contexts;

namespace WebTour.Data.Seeders;

public class DataSeeder : IDataSeeder
{
    private readonly BlogDbContext _dbContext;

    public DataSeeder(BlogDbContext dbContext)
    { _dbContext = dbContext; }

    public void Initialize()
    {
        _dbContext.Database.EnsureCreated();
        if (_dbContext.Posts.Any()) return;
        var categories = AddCategories();
        var postsType = AddPostsType();
        var tags = AddTags();
        var users = AddUsers();
        var services = AddServices();
        var post = AddPosts(postsType, categories, tags);
    }

    private IList<User> AddUsers()
    {
        var users = new List<User>()
        {
            new()
            {
                FullName = "Nhat Ha",
                Email = "nhatha0206@gmail.com",
                Username = "nhatha123",
                Password = "Thanhha0206",
                Notes = "Đây là tài khoản quản lý"
            },

            new()
            {
                FullName = "Hoang Ha",
                Email = "admin1@gmail.com",
                Username = "admin1",
                Password = "a12345",
                Notes = "admin1"
            },

            new()
            {
                FullName = "Minh Anh",
                Email = "admin2@gmail.com",
                Username = "admin2",
                Password = "a56789",
                Notes = "admin2"
            },

            new()
            {
                FullName = "Nhat Minh",
                Email = "staff1@gmail.com",
                Username = "staff1",
                Password = "s12345",
                Notes = "staff1"
            },

            new()
            {
                FullName = "Tran Hoang",
                Email = "staff2@gmail.com",
                Username = "staff2",
                Password = "s56789",
                Notes = "staff2"
            },

            new()
            {
                FullName = "Hoang Thai",
                Email = "staff3@gmail.com",
                Username = "staff3",
                Password = "s13579",
                Notes = "staff3"
            },

            new()
            {
                FullName = "Nguyen Hung",
                Email = "staff4@gmail.com",
                Username = "staff4",
                Password = "s24680",
                Notes = "staff4"
            }
        };
        foreach (var user in users)
        {
            if (!_dbContext.Users.Any(u => u.UrlSlug == user.UrlSlug))
                _dbContext.Users.Add(user);
        }
        //_dbContext.Authors.AddRange(authors);
        _dbContext.SaveChanges();
        return users;
    }

    private IList<Services> AddServices()
    {
        var services = new List<Services>()
        {
            new()
            {
                Title ="1",
                UrlSlug ="servies-1",
                Description ="Dịch vụ cho thuê xe máy"
            },
            new()
            {
                Title ="2",
                UrlSlug ="servies-2",
                Description ="Dịch vụ cho thuê ô tô"
            },
        };

        foreach (var service in services)
        {
            if (!_dbContext.Services.Any(s => s.UrlSlug == service.UrlSlug))
                _dbContext.Services.Add(service);
        }
        //_dbContext.Categories.AddRange(categories);
        _dbContext.SaveChanges();

        return services;
    }

    private IList<PostsType> AddPostsType()
    {
        var postsType = new List<PostsType>()
        {
                new() {Name = "Bản tin", Description = "Chứa các bài viết thuộc bản tin", UrlSlug = "ban-tin"},
                new() {Name = "Tours", Description = "Quản lý các bài viết thuộc tours du lịch", UrlSlug = "tours"},
                new() {Name = "Cơ sở lưu trú", Description = "Chứa các bài viết thuộc cơ sở lưu trú", UrlSlug = "co-so-luu-tru"},
        };
        foreach (var posts in postsType)
        {
            if (!_dbContext.PostsType.Any(p => p.UrlSlug == posts.UrlSlug))
                _dbContext.PostsType.Add(posts);
        }
        //_dbContext.Categories.AddRange(categories);
        _dbContext.SaveChanges();

        return postsType;
    }

    private IList<Category> AddCategories()
    {
        var categories = new List<Category>()
        {
                new() {Name = "Tin tức", Description = "Chứa các bài viết thuộc chủ đề tin tức", UrlSlug = "tin-tuc"},
                new() {Name = "Khách sạn", Description = "Quản lý các bài viết thuộc chủ đề khách sạn", UrlSlug = "khach-san"},
                new() {Name = "Chung", Description = "Chứa các bài viết thuộc chủ đề chung", UrlSlug = "chung"},
        };
        foreach (var category in categories)
        {
            if (!_dbContext.Categories.Any(a => a.UrlSlug == category.UrlSlug))
                _dbContext.Categories.Add(category);
        }
        //_dbContext.Categories.AddRange(categories);
        _dbContext.SaveChanges();

        return categories;
    }

    private IList<Tag> AddTags()
    {
        var tags = new List<Tag>()
            {
                // 0
                new() {Name = "Yêu thích", Description = "Khách sạn được yêu thích nhất", UrlSlug = "yeu-thich"},
                // 1
                new() {Name = "Uy tín", Description = "Khách sạn uy tín nhất", UrlSlug = "uy-tin"},
                // 2
                new() {Name = "Đánh giá cao", Description = "Khách sạn được đánh giá cao", UrlSlug = "danh-gia-cao"},
                // 3
                new() {Name = "Tin nghi", Description = "Khách sạn tiện nghi nhất", UrlSlug = "tien-nghi"},
                // 4
                new() {Name = "Giá hợp lý", Description = "Khách sạn có giá hợp lý", UrlSlug = "gia-hop-ly"},
                // 5
                new() {Name = "View đồi núi", Description = "Homestay có view đồi núi đẹp nhất", UrlSlug = "view-doi-nui"},
                // 6
                new() {Name = "Nhà hàng ngon", Description = "Những nhà hàng ngon dành cho tín đồ ẩm thực", UrlSlug = "nha-hang-ngon"},
                // 7
                new() {Name = "Địa điểm", Description = "Địa điểm nổi tiếng", UrlSlug = "dia-diem"},
                // 8
                new() {Name = "2 ngày 1 đêm", Description = "Tour có lịch trình 2 ngày 1 đêm", UrlSlug = "2-ngay-1-dem"},
                // 9
                new() {Name = "3 ngày 2 đêm", Description = "Tour có lịch trình 3 ngày 2 đêm", UrlSlug = "3-ngay-2-dem"},
                //10
                new() {Name = "4 ngày 3 đêm", Description = "Tour có lịch trình 4 ngày 3 đêm", UrlSlug = "4-ngay-3-dem"},
                // 11
                new() {Name = "5 ngày 4 đêm", Description = "Tour có lịch trình 5 ngày 4 đêm", UrlSlug = "5-ngay-4-dem"},
                // 12
                new() {Name = "3 ngày 3 đêm", Description = "Tour có lịch trình 3 ngày 3 đêm", UrlSlug = "3-ngay-3-dem"},
                // 13
                new() {Name = "View thành phố", Description = "Homestay có view thành phố đẹp nhất", UrlSlug = "view-thanh-pho"},
                // 14
                new() {Name = "Tour lễ 2/9", Description = "Những tour vào ngày lễ 2/9 ", UrlSlug = "tour-le-2/9"},
                // 15
                new() {Name = "Tour khám phá mùa hoa", Description = "Những tour vào mùa hoa", UrlSlug = "tour-mua-hoa"},
                // 16
                new() {Name = "Tour xe giá sốc", Description = "Những tour có xe giá sốc", UrlSlug = "tour-xe-gia-soc"},
                // 17
                new() {Name = "Tour Tết Dương lịch", Description = "Những tour vào ngày Tết Dương Lịch", UrlSlug = "tour-Tet-duong-lich"},
                // 18
                new() {Name = "Tour Tết Nguyên Đán", Description = "Những tour vào ngày Tết Nguyên Đán", UrlSlug = "tour-Tet-Nguyen-Dan"},
                // 19
                new() {Name = "Tour lễ 30/4 - 1/5", Description = "Những tour lễ 30/4 - 1/5", UrlSlug = "tour-le-30/4-1/5"},
                // 20
                new() {Name = "Tour khách đoàn", Description = "Những tour khách đoàn", UrlSlug = "tour-khach-doan"},
                // 21
                new() {Name = "Tour gia đình", Description = "Những tour gia đình", UrlSlug = "tour-gia-dinh"},
                // 22
        };
        foreach (var tag in tags)
        {
            if (!_dbContext.Tags.Any(t => t.UrlSlug == tag.UrlSlug))
                _dbContext.Tags.Add(tag);
        }
        //_dbContext.Tags.AddRange(tags);
        _dbContext.SaveChanges();

        return tags;
    }

    private IList<Posts> AddPosts(
       IList<PostsType> postsTypes,
       IList<Category> categories,
       IList<Tag> tags)
    {
        var posts = new List<Posts>()
        {
            new()
            {
                Title = "Du lịch Đà Lạt - Đường hầm điêu khắc - Thiền Viện Trúc Lâm - Khởi hành từ Nha Trang",
                Schedule = "Nha Trang - Đà Lạt",
                Timetable = "3 ngày 2 đêm",
                Prices = 0,
                ShortDescription = "Tham quan khu Du Lịch Trang Trại Hoa (Làng hoa thành phố, Vạn Thành), nằm trải rộng cả một thung lũng với bốn bề là hoa đẹp tuyệt vời.\r\n Tham quan và chụp hình tại Đường hầm điêu khắc đất đỏ (Đà Lạt Star), Thiền Viện Trúc Lâm.",
                Description = "Đến với chuyến đi này du khách được chiêm ngưỡng, khám phá, tham quan vùng đất với bốn bề là hoa đẹp, tìm hiểu về mô hình sản xuất nông nghiệp công nghệ cao. Tham quan đường hầm điêu khắc đất đỏ - tái hiện lịch sử Đà Lạt qua hơn 120 năm.",
                Meta = "David and friends has a great repository",
                UrlSlug = "dulichdalat-duonghamdieukhac-thienvientruclam",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 10, 20, 0),
                ModifiedDate = null,
                ViewCount = 20,
                PostsType = postsTypes[1],
                Category = categories[2],
                Tags = new List<Tag>()
                {
                    tags[7],
                    tags[9]
                }
            },

            new()
            {
                Title = "Du lịch Đà Lạt - Trang trại rau và hoa - Đồi chè cầu đất - Thác DATANLA",
                Schedule = "TP. Hồ Chí Minh - Đà Lạt",
                Timetable = "4 ngày 3 đêm",
                Prices = 0,
                ShortDescription = "Tham quan khu Du Lịch Trang Trại Rau, nằm trải rộng cả một thung lũng với bốn bề là rau.\r\n Tham quan và chụp hình tại Đồi chè Cầu Đất, ngắm nhìn cảnh tượng hùng vỹ của núi rừng nơi đây.",
                Description = "Đến với chuyến đi này du khách được chiêm ngưỡng, khám phá, tham quan vùng đất với bốn bề là rau xanh, tìm hiểu về mô hình vườn nông sản và vườn rau thuỷ canh trồng các giống lạ. Đồi chà Cầu Đất với đồi quạt gió khổng lồ bên những luống trà dưới nền trời biếc xanh, trải nghiệm khu cầu gỗ săn mây. Tham quan thác DATANLA - nổi tiếng với vẻ đẹp hoang sơ, thơ mộng mà dữ dội, đặc trưng của đại ngàn Tây Nguyên.",
                Meta = "David and friends has a great repository",
                UrlSlug = "dulichdalat-trangtrairauvahoa-doichecaudat",
                Published = true,
                PostedDate = new DateTime(2023, 10, 10, 9, 30, 5),
                ModifiedDate = null,
                ViewCount = 30,
                PostsType = postsTypes[1],
                Category = categories[2],
                Tags = new List<Tag>()
                {
                    tags[7],
                    tags[10]
                }
            },

            new()
            {
                Title = "Du lịch Đà Lạt - Thành phố ngàn hoa",
                Schedule = "Vũng Tàu - Đà Lạt",
                Timetable = "3 ngày 3 đêm",
                Prices = 0,
                ShortDescription = "Tận hưởng bầu không khí mát mẻ, trong lành tại thành phố Hoa Đà Lạt.\r\n Tham quan, chụp ảnh những điểm đến hot nhất Đà Lạt hiện nay.\r\n Cảm nhận được nét đẹp vừa cổ kính, vừa hiện đại của Đà Lạt",
                Description = "Đến với chuyến đi này du khách được tham quan, khám phá nhũng địa điểm du lịch hấp dẫn như: Viện Bảo Tàng Sinh Học Tây Nguyên -  tham quan mua sắm Socola, Khu du lịch Chuồn Chuồn - tận hưởng không gian đẹp 360 độ không góc chết,  Ga Đà Lạt – là nhà ga cổ nhất Đông Dương còn sót lại ở Việt Nam, Chùa Linh Phước (chùa Ve Chai) – chiêm ngưỡng con rồng dài 49m, vây được đắp bằng các mảnh vỡ của 50 nghìn vỏ chai quanh tượng Phật Di Lạc và nhiều tác phẩm đặc sắc khác.",
                Meta = "David and friends has a great repository",
                UrlSlug = "dulichdalat-thanhphonganhoa",
                Published = true,
                PostedDate = new DateTime(2023, 8, 15, 7, 10, 10),
                ModifiedDate = null,
                ViewCount = 25,
                PostsType = postsTypes[1],
                Category = categories[2],
                Tags = new List<Tag>()
                {
                    tags[12]
                }
            },

            new()
            {
                Title = "Du lịch Đà Lạt - Khu du lịch Đồi Mây - LangBiang",
                Schedule = "Bình Dương - Đà Lạt",
                Timetable = "3 ngày 3 đêm",
                Prices = 0,
                ShortDescription = "Tham quan Đồi Mây Đà Lạt - khu du lịch nằm bao trọn trên ngọn đồi Túy Sơn. Ngọn núi hùng vĩ LangBiang.",
                Description = "Đến với chuyến đi này du khách được tham quan Quảng trường Lâm Viên với không gian rộng lớn, thoáng mát hướng ra hồ Xuân Hương cùng công trình nghệ thuật khối bông hoa dã quỳ và khối nụ hoa Atiso khổng lồ được thiết kế bằng kính màu rất đẹp mắt.  Đồi Mây Đà Lạt - khu du lịch nằm bao trọn trên ngọn đồi Túy Sơn được biết đến là điểm đến hấp dẫn với tổng diện tích lên đến 1.5 ha, có tầm nhìn bao quát 360 độ và các cánh đồng hoa được trồng theo mùa như Cẩm Tú Cầu, Sim tím, Cúc Vàng thân gỗ, Cúc Hoạ Mi, Hướng Dương,...Tham quan khu du lịch Langbiang - tham quan đồi Mimosa, thung lũng Trăm Năm, chinh phục núi Langbiang.",
                Meta = "David and friends has a great repository",
                UrlSlug = "dulichdalat-khudulichdoimay-langbiang",
                Published = true,
                PostedDate = new DateTime(2023, 10, 5, 11, 10, 20),
                ModifiedDate = null,
                ViewCount = 20,
                PostsType = postsTypes[1],
                Category = categories[2],
                Tags = new List<Tag>()
                {
                    tags[7],
                    tags[12]
                }
            },

            // HotelPosts
            new()
            {
                Title = "Khách sạn Đà Lạt có view đẹp",
                Schedule = "",
                Timetable = "",
                Prices = 1500000,
                ShortDescription = "Với không gian thoáng mát, đầy đủ tiện nghi.",
                Description = "Với kiến trúc mang đậm phong cách Phương Tây hiện đại, được thiết kế theo không gian mở tạo cảm giác gần gũi với thiên nhiên",
                Meta = "David and friends has a great repository",
                UrlSlug = "khachsandalatcoviewdep",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 10, 20, 0),
                ModifiedDate = null,
                ViewCount = 20,
                PostsType = postsTypes[2],
                Category = categories[1],
                Tags = new List<Tag>()
                {
                    tags[1],
                    tags[5]
                }
            },

            new()
            {
                Title = "Khách sạn Đà Lạt được yêu thích nhất",
                 Schedule = "",
                Timetable = "",
                Prices = 1600000,
                ShortDescription = "Với không gian thoáng mát, đầy đủ tiện nghi.",
                Description = "Với kiến trúc mang đậm phong cách Phương Tây hiện đại, được thiết kế theo không gian mở tạo cảm giác gần gũi với thiên nhiên",
                Meta = "David and friends has a great repository",
                UrlSlug = "khachsandalatduocyeuthichnhat",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 10, 10, 0),
                ModifiedDate = null,
                ViewCount = 20,
                PostsType = postsTypes[2],
                Category = categories[1],
                Tags = new List<Tag>()
                {
                    tags[0],
                    tags[5]
                }
            },

            new()
            {
                Title = "Khách sạn Đà Lạt được đánh giá cao",
                 Schedule = "",
                Timetable = "",
               Prices = 1300000,
                ShortDescription = "Với không gian thóng mát, đầy đủ tiện nghi.",
                Description = "Với kiến trúc mang đậm phong cách Phương Tây hiện đại, được thiết kế theo không gian mở tạo cảm giác gần gũi với thiên nhiên",
                Meta = "David and friends has a great repository",
                UrlSlug = "khachsandalatduocdanhgiacao",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 10, 20, 0),
                ModifiedDate = null,
                ViewCount = 20,
                PostsType = postsTypes[2],
                Category = categories[1],
                Tags = new List<Tag>()
                {
                    tags[2],
                    tags[4]
                }
            },

            // News
            new()
            {
                Title = "Top 6 nhà hàng ngon dành cho tín đồ ẩm thực",
                 Schedule = "",
                Timetable = "",
                Prices =0,
                ShortDescription = "Danh sách các nhà hàng ẩm thực nổi tiếng dưới đây chắc chắn sẽ giúp bạn có thể thưởng thức được nhiều món ngon trong chuyến du lịch Đà Lạt.",
                Description = "Với vị trí thuận lợi và các món ăn chất lượng. Tất cả đều có hương vị thơm ngon và hấp dẫn thực khách. Không những thế, nhà hàng này còn có không gian thoáng mát, rộng rãi.",
                Meta = "David and friends has a great repository",
                UrlSlug = "top6nhahangngondanhchotindoamthuc",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 10, 20, 0),
                ModifiedDate = null,
                ViewCount = 15,
                PostsType = postsTypes[0],
                Category = categories[0],
                Tags = new List<Tag>()
                {
                    tags[4],
                    tags[6]
                }
            },

            new()
            {
                Title = "Top 5 ngôi chùa nổi tiếng linh thiêng nhất trong tour Đà Lạt",
                 Schedule = "",
                Timetable = "",
                Prices=0,
                ShortDescription = "Những ngôi chùa ở Đà Lạt vẫn luôn được đánh giá rất cao về sự linh thiêng kết hợp với lối kiến trúc độc đáo đan xen giữa nét cổ kính và hiện đại thu hút đông đảo khách du lịch Đà Lạt.",
                Description = "Nổi tiếng là một trong những nơi sở hữu rất nhiều ngôi chùa đẹp, cổ kính với kiến trúc vô cùng độc đáo. Nếu bạn đang mong muốn được tìm kiếm sự thanh tịnh và chiêm ngưỡng nét kiến trúc cổ kính trong chuyến du lịch Đà Lạt thì đây là danh sách 5 ngôi chùa tuyệt vời nhất." +
                ".",
                Meta = "David and friends has a great repository",
                UrlSlug = "top5ngoichuanoitienglinhthiengnhattrongtourdalta",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 10, 20, 0),
                ModifiedDate = null,
                ViewCount = 15,
                PostsType = postsTypes[0],
                Category = categories[0],
                Tags = new List<Tag>()
                {
                    tags[0],
                    tags[7]
                }
            },

            new()
            {
                Title = "Khám phá vẻ đẹp về đêm của thành phố ngàn hoa",
                 Schedule = "",
                Timetable = "",
                Prices = 0,
                ShortDescription = "Thu hút được đông đảo khách du lịch Đà Lạt.",
                Description = "Vốn sở hữu nhiều khu phố hiện đại, những tòa nhà cổ kính.",
                Meta = "David and friends has a great repository",
                UrlSlug = "khamphavedepvedemcuathanhphonganhoa",
                Published = true,
                PostedDate = new DateTime(2023, 9, 30, 11, 20, 0),
                ModifiedDate = null,
                ViewCount = 25,
                PostsType = postsTypes[0],
                Category = categories[0],
                Tags = new List<Tag>()
                {
                    tags[4],
                    tags[6]
                }
            }
        };
        foreach (var post in posts)
        {
            if (!_dbContext.Posts.Any(p => p.UrlSlug == post.UrlSlug))
                _dbContext.Posts.Add(post);
        }
        //_dbContext.Posts.AddRange(posts);
        _dbContext.SaveChanges();

        return posts;
    }
}