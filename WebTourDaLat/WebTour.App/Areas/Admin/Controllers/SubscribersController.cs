////using FluentValidation;
////using MapsterMapper;
//using Microsoft.AspNetCore.Mvc;
//using WebTour.Services.Blogs;
//using WebTour.Services.Media;

////using WebTour.Services.Subscribers;
////using WebTour.WebApp.Areas.Admin.Models;

//namespace WebTour.WebApp.Areas.Admin.Controllers
//{
//    public class SubscribersController : Controller
//    {
//        private readonly ILogger<SubscribersController> _logger;

//        //private readonly IValidator<SubscriberEditModel> _commentValidator;
//        private readonly IBlogRepository _blogRepository;

//        //private readonly ISubscriberRepository _subscriberRepository;
//        private readonly IMediaManager _mediaManager;

//        //private readonly IMapper _mapper;

//        public SubscribersController(
//            ILogger<SubscribersController> logger,
//            //IValidator<SubscriberEditModel> commentValidator,
//            //ISubscriberRepository subscriberRepository,
//            IBlogRepository blogRepository,
//            IMediaManager mediaManager)
//        {
//            _logger = logger;
//            //_commentValidator = commentValidator;
//            //_subscriberRepository = subscriberRepository;
//            _mediaManager = mediaManager;
//            _blogRepository = blogRepository;
//            //_mapper = mapper;
//        }

//        public async Task<IActionResult> Index(
//            [FromQuery(Name = "p")] int pageNumber = 1,
//            [FromQuery(Name = "ps")] int pageSize = 10)
//        {
//            //var model = await _subscriberRepository.GetPagedSubscriberAsync(pageNumber, pageSize);

//            //return View(model);
//        }
//    }
//}