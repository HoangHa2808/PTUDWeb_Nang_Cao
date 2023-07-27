import React, { useMemo } from 'react'
import {postsData} from '../../data/posts';
import PostEntry from '../blog/posts/PostEntry';

const RandomPosts = () => {
  const topPosts = useMemo(() => {
    return postsData
      .map(item => ({post: item, weight: Math.random()}))
      .sort((x, y) => x.weight - y.weight)
      .map((item) => item.post)
      .slice(0, 5);
  }, []);

  return (
    <div className="mb-4">
      <h4 className='mb-3 text-danger'>
        Random Posts
      </h4>
      <div>
        {topPosts.map((post) => (
          <PostEntry key={post.id} post={post} />
        ))}
      </div>
    </div>
  )
}

export default RandomPosts;