import React from 'react'
import { useParams } from 'react-router-dom';

const PostByTag = () => {
  const params=useParams();

  return (
    <div>
      <h1>
        Articles Contain Tag
        <span className='text-primary'>{params.slug}</span>      PostByTag
      </h1>
      <PostSearch postQuery={{tagSlug: params.slug}} />   
      </div>
  )
}

export default PostByTag;