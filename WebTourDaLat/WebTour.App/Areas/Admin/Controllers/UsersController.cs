using Microsoft.AspNetCore.Mvc;

namespace WebTour.WebApp.Areas.Admin.Controllers
{
    public class UsersController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}