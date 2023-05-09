import React, { useEffect, useState } from 'react'

const Categories = () => {
const [categories, setCategories] = useState([]);
useEffect(() =>{
  loadCategories();


  async function loadCategories(){
    const response = await fetch('');
    const data = await response.json();

    setCategories(data.result);
  }
},[]);

  return (
    <div className="mb-4">
      <h4 className='mb-3 text-primary'>
        Categories
      </h4>

      <ul className="list-group">
        {categories.map(item =>(
        <li key={item.id} className="list-group-item">
      <Link to={`/category/${item.urlSlug}`}>        

       </Link>
</li>
        ))}
      </ul>
    </div>
  )
}

export default Categories;