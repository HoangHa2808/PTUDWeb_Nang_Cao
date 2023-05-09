using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebTour.Core.Entities;

namespace WebTour.Data.Mappings;

public class UserMap : IEntityTypeConfiguration<User>
{
    public void Configure(EntityTypeBuilder<User> builder)
    {
        builder.ToTable("User");
        builder.HasKey(u => u.Id);

        builder.Property(u => u.FullName)
            .HasMaxLength(100)
            .IsRequired();

        builder.Property(u => u.Email)
        .HasMaxLength(150);

        builder.Property(u => u.Username)
           .HasMaxLength(50)
           .IsRequired(); 
        
        builder.Property(u => u.Password)
            .HasMaxLength(20)
            .IsRequired();

        builder.Property(u => u.Notes)
            .HasMaxLength(500);
    }
}