using Microsoft.AspNetCore.Mvc;

namespace WebTour.WebApp.Areas.Admin.Controllers
{
    public class FeedbacksController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}