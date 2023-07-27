import React from 'react'
import AuthorDetail from '../components/blog/authors/AuthorDetail';

const PostByAuthor = () => {
  const params = useParams();
  return (
    <div>
       <h1 className='mb-5'>
        Articles Written By Author
        <span className='text-primary'>{params.slug}</span>
      </h1>
{/* Hiển thị thông tin tác giả */}
        <AuthorDetail authorSlug={params.slug}/>

      <PostSearch postQuery={{authorSlug: params.slug}} />  
      </div>
  )
}

export default PostByAuthor;