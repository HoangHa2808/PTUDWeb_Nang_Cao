import React from 'react'
import Pager from '../../controls/Pager';
import PostGrid from './PostGrid';
import { postsData } from '../../../data/posts';

const PostSearch = () => {
    return (
        <div className="posts-wrapper">
            <PostGrid articles={postsData} />
            <Pager 
                hasNextPage={true}
                hasPrevPage={false}
                onPageChange={(val) => console.log('Load posts on next page')} />
        </div>
    )
}

export default PostSearch;