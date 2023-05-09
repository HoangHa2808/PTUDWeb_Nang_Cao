using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Contracts;

namespace WebTour.Core.Entities
{
    public class Feedback : IEntity
    {
        public int Id { get; set; }
        public string Title { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }
        public DateTime PostedDate { get; set; }
        public bool IsApproved { get; set; }
        public int PostId { get; set; }
        public Posts Post { get; set; }
    }
}