using Microsoft.AspNetCore.Builder;
using System.Threading.Channels;

namespace TatBlog.WebApp.Extensions
{
    public static class RouteExtensions
    {
        // Định nghĩa route template, route constraint cho các
        // endpoints kết hợp với các action trong các controller.
        public static IEndpointRouteBuilder UseBlogRoutes(
        this IEndpointRouteBuilder endpoints)
        {
            endpoints.MapControllerRoute(
                name: "admin-area",
                pattern: "admin/{controller=Dashboard}/{action=Index}/{id?}",
                defaults: new { area = "Admin" }); 
            
            endpoints.MapControllerRoute(
                name: "admin-area",
                pattern: "admin/{controller=GeneralPosts}/{action=Index}/{id?}",
                defaults: new { area = "Admin" });

            endpoints.MapControllerRoute(
                name: "admin-area",
                pattern: "admin/{controller=HotelPosts}/{action=Index}/{id?}",
                defaults: new { area = "Admin" });

            endpoints.MapControllerRoute(
                name: "admin-area",
                pattern: "admin/{controller=News}/{action=Index}/{id?}",
                defaults: new { area = "Admin" });

            //endpoints.MapControllerRoute(
            //    name: "default",
            //    pattern: "{controller=Blog}/{action=Index}/{id?}");

            return endpoints;
        }
    }
}
