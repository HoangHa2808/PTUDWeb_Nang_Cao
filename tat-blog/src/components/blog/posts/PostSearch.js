import React, { useEffect, useState } from 'react'
import Pager from '../../controls/Pager';
import PostGrid from './PostGrid';
import { postsData } from '../../../data/posts';

const PostSearch = ({postQuery}) => {
const{
    keyword, year, month, tagSlug, authorSlug, categorySlug
} = postQuery;

const[pageNumber, setPageNumber] = useState(1);
const[postsList, setPostsList] = useState({
    items: [],
    metadata: {}
});

useEffect(()=>{
    loadBlogPosts();

    async function loadBlogPosts(){
        const parameters = new URLSearchParams({
            keyword: keyword || '',
            authorSlug: authorSlug || '',
            tagSlug: tagSlug || '',
            categorySlug: categorySlug || '',
            year: year || 0,
            month: month || 0,
            pageNumber: pageNumber || 1,
            pageSize: 10

        });
        const apiEndpoint=`link websita trên API?${parameters}`;
        const response = await fetch(apiEndpoint);
        const data = await response.json();

    setPostsList(data.result);
    window.scrollTo(0,0);
    }
}, [keyword, year, month, tagSlug, authorSlug, categorySlug, pageNumber]);

function updatePageNumber(inc){
    // setPageNumber(10);
    // Tăng mắt xem......
    setPageNumber((currentVal)=> currentVal + inc);
}

    return (
        <div className="posts-wrapper">
            <PostGrid articles={postsList.items} />
            <Pager 
                pageCount={postsList.metadata.pageCount}
                hasNextPage={postsList.metadata.hasNextPage}
                hasPrevPage={postsList.metadata.hasPrevPage}
                onPageChange={updatePageNumber} />
        </div>
    )
}

export default PostSearch;