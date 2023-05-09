//using FluentValidation.AspNetCore;
//using MapsterMapper;
using Microsoft.AspNetCore.Mvc;
using WebTour.Core.DTO;
using WebTour.Core.Entities;

//using WebTour.Services.Subscribers;
using WebTour.Services.Blogs;
using WebTour.Services.Media;

//using WebTour.WebApp.Areas.Admin.Models;

namespace WebTour.WebApp.Areas.Admin.Controllers
{
    public class DashboardController : Controller
    {
        private readonly IBlogRepository _blogRepository;

        //private readonly ISubscriberRepository _subscriberRepository;
        private readonly IMediaManager _mediaManager;

        //private readonly IMapper _mapper;

        public DashboardController(
            IBlogRepository blogRepository,
            //ISubscriberRepository subscriberRepository,
            IMediaManager mediaManager)
        {
            //_subscriberRepository = subscriberRepository;
            _mediaManager = mediaManager;
            _blogRepository = blogRepository;
            //_mapper = mapper;
        }

        public async Task<IActionResult> Index()
        {
            //ViewBag.CountPost = await _blogRepository.CountPostAsync();
            //ViewBag.CountUnPublicPost = await _blogRepository.CountUnPublicPostAsync();
            //ViewBag.CountCategory = await _blogRepository.CountCategoryAsync();

            //ViewBag.CountAuthor = await _authorRepository.CountAuthorAsync();
            //ViewBag.CountComment = await _blogRepository.CountCommentAsync();
            //ViewBag.CountSubscriber = await _subscriberRepository.CountSubAsync();
            //ViewBag.CountSubscriberState = await _subscriberRepository.CountSubscriberStateAsync();
            return View();
        }
    }
}