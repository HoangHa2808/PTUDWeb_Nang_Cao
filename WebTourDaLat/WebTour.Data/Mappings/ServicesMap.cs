using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Entities;

namespace WebTour.Data.Mappings;

public class ServicesMap : IEntityTypeConfiguration<Services>
{
    public void Configure(EntityTypeBuilder<Services> builder)
    {
        builder.ToTable("Services");
        builder.HasKey(u => u.Id);

        builder.Property(p => p.Title)
               .HasMaxLength(500)
               .IsRequired();

        builder.Property(c => c.Description)
               .HasMaxLength(500);
    }
}