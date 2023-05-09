using Microsoft.EntityFrameworkCore.Metadata.Builders;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Entities;

namespace WebTour.Data.Mappings
{
    public class FeedbackMap : IEntityTypeConfiguration<Feedback>
    {
        public void Configure(EntityTypeBuilder<Feedback> builder)
        {
            builder.ToTable("Feedback");
            builder.HasKey(f => f.Id);
            builder.Property(f => f.Name)
                .IsRequired()
                .HasMaxLength(50);
            builder.Property(f => f.Description)
                .IsRequired()
                .HasMaxLength(1000);
            builder.Property(f => f.PostedDate)
                .HasColumnType("datetime");
            builder.Property(f => f.IsApproved)
                .HasDefaultValue(false);
            builder.HasOne(f => f.Post)
                .WithMany(f => f.Feedbacks)
                .HasForeignKey(f => f.PostId)
                .HasConstraintName("FK_Feedback_Posts")
                .OnDelete(DeleteBehavior.Cascade);
        }
    }
}