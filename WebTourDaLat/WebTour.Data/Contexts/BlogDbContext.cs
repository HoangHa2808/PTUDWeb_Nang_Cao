using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebTour.Core.Entities;
using WebTour.Data.Mappings;

namespace WebTour.Data.Contexts
{
    public class BlogDbContext : DbContext
    {
        public DbSet<Category> Categories { get; set; }
        public DbSet<PostsType> PostsType { get; set; }
        public DbSet<Feedback> Feedbacks { get; set; }
        public DbSet<Posts> Posts { get; set; }
        public DbSet<Services> Services { get; set; }
        public DbSet<Comment> Comments { get; set; }
        public DbSet<Subscriber> Subscribers { get; set; }
        public DbSet<Tag> Tags { get; set; }
        public DbSet<User> Users { get; set; }

        protected override void OnConfiguring(
       DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer(@"Server=localhost;Database=WebTour;Trusted_Connection=True;MultipleActiveResultSets=true;TrustServerCertificate=True");
        }

        public BlogDbContext()
        {
            
        }

        public BlogDbContext(DbContextOptions<BlogDbContext> options) : base(options)
        { }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.ApplyConfigurationsFromAssembly(
                typeof(CategoryMap).Assembly);
        }
    }
}