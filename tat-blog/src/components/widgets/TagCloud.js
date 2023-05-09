import React from 'react'
import TagList from '../blog/tags/TagList';

const TagCloud = () => {
  const [tags, setTags] = useState([]);

useEffect(() =>{
  loadTagsList();

  async function loadTagsList(){
    const response = await fetch('link websita trên API');
    const data = await response.json();

    setTags(data.result);
  }
},[]);

  return (
    <div className='mb-4'>
      <h4 className='mb-3 text-success'>
        Tag Cloud
      </h4>

      <TagList tags={tags} />
    </div>
  )
}

export default TagCloud;