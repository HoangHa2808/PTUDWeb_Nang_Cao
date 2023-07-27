import React, {useEffect, useState} from 'react'

const FeaturedPosts = () => {
  const [topPosts, setTopPosts] = useState([]);

useEffect(() =>{
  loadFeaturedPosts();

  async function loadFeaturedPosts(){
    const response = await fetch('link websita trên API');
    const data = await response.json();

    setTopPosts(data.result);
  }
},[]);

  return (
    <div className='mb-5'>
      <h1 className='text-center text-primary mb4'>
        FeaturedPosts
        </h1>

        <PostGrid columns={3} articles={topPosts} />   
    </div>
        
  )
}

export default FeaturedPosts;