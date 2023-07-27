using Mapster;
using WebTour.Core.DTO;
using WebTour.Core.Entities;
using WebTour.WebApp.Areas.Admin.Models;

namespace WebTour.WebApp.Mapsters
{
    public class MapsterConfiguration : IRegister
    {
        public void Register(TypeAdapterConfig config)
        {
            config.NewConfig<Posts, PostItem>()
                .Map(dest => dest.CategoryName, src => src.Category.Name)
                .Map(dest => dest.Tags, src => src.Tags.Select(x => x.Name));

            config.NewConfig<PostFilterModel, PostsQuery>()
                .Map(dest => dest.PublishedOnly, src => false);

            config.NewConfig<PostEditModel, Posts>()
                .Ignore(dest => dest.Id)
                .Ignore(dest => dest.ImageUrl);

            config.NewConfig<Posts, PostEditModel>()
                .Map(dest => dest.SelectedTags, src =>
                string.Join("\r\n", src.Tags.Select(x => x.Name)))
                .Ignore(dest => dest.CategoryList)
                .Ignore(dest => dest.PostsTypeList)
                .Ignore(dest => dest.ImageFile);

            config.NewConfig<CategoryEditModel, Category>()
               .Ignore(dest => dest.Id)
               .Ignore(dest => dest.ShowOnMenu);
        }
    }
}