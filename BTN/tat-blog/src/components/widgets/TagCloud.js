import React from 'react'
import TagList from '../blog/tags/TagList';
import {tagsData } from '../../data/tags';

const TagCloud = () => {
  return (
    <div className='mb-4'>
      <h4 className='mb-3 text-success'>
        Tag Cloud
      </h4>

      <TagList tags={tagsData} />
    </div>
  )
}

export default TagCloud;