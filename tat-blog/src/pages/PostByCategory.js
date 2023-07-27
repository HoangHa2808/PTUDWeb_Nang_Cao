import React from 'react'

const PostByCategory = () => {
  const params = useParams();

  return (
    <div>
      <h1>
        Articles Contain Category
        <span className='text-primary'>{params.slug}</span>
      </h1>
      <PostSearch postQuery={{categorySlug: params.slug}} />  
      </div>
  )
}

export default PostByCategory;