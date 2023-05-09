using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Entities;

namespace WebTour.Core.DTO;

public class PostItem
{
    public int Month { get; set; }
    public int Year { get; set; }
    public int PostCount { get; set; }
    public string CategoryName { get; set; }
    public IList<Tag> Tags { get; set; }
}