using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using TatBlog.Core.Contracts;

namespace TatBlog.Core.Entities;

public class Post : IEntity
{
	public int Id { get; set; }	
	public string Title { get; set; }
	public string ShortDescription { get; set; }
	public string Description { get; set; }
	public string UrlSlug { get; set; }
	public string ImageUrl { get; set; }
	public int ViewCount { get; set; }
	public bool Published { get; set; }
	//public bool UnPublished { get; set; }
	public DateTime PostedDate { get; set; }
	public DateTime? ModifiedDate { get; set; }
}
