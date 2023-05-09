using WebTour.Data.Contexts;
using WebTour.Data.Seeders;
using WebTour.Services.Blogs;

namespace WebTour.WinApp;

public class Program
{
    private static void Main(string[] args)
    {
        // Tạo đối tượng context để quản lý phiên làm việc
        var context = new BlogDbContext();
        InitDB(context);

        //XuatDanhSachBaiViet(context);
        //XuatDanhSachDanhMuc(context);
        Console.ReadKey();
    }

    private static void InitDB(BlogDbContext context)
    {
        // Tạo đối tượng khởi tạo dữ liệu mẫu
        var seeder = new DataSeeder(context);
        // Gọi hàm nhập dữ liệu mẫu
        seeder.Initialize();
    }

    //private static async void XuatDanhSachDanhMuc(BlogDbContext context)
    //{
    //    // Tạo đối tượng BlogRepository
    //    IBlogRepository blogRepo = new BlogRepository(context);

    //    var categories = await blogRepo.GetCategoriesAsync();

    //    Console.WriteLine("{0,-5}{1,-50}{2,10}", "ID", "Name", "Count");

    //    foreach (var category in categories)
    //    {
    //        Console.WriteLine("{0,-5}{1,-50}{2,10}", category.Id, category.Name, category.PostCount);
    //    }
    //}
}

//public class Program
//{
//    private static void Main()
//    { }
//}