import React, { useState } from 'react'
import { Link } from 'react-router-dom';

const Archives = () => {
  const [monthlyCount, setMonthlyCount] = useState([]);

  useEffect(() =>{
    loadArchives();
  
      async function loadArchivedData(){
      const response = await fetch('');
      const data = await response.json();
  
      setMonthlyCount(data.result);
    }
  },[]);
  return (
    <div className="mb-3">
      <h4 className='mb-3 text-danger'>
        Archives
      </h4>

      <div className="list-group list-group-flush">
      {monthlyCount.map(item =>(

        <Link
          className="list-group-item d-flex justify-content-between align-items-start"
          to={`/archives/${item.year}/${item.month}`}
        >
          <div className="me-auto">
            March 2023
          </div>
          <span className="badge bg-primary rounded-pill">
            4
          </span>
        </Link>
       

      ))}>
          
      </div>
    </div>
  )
}

export default Archives;