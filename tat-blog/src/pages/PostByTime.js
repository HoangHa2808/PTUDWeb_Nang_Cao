import React from 'react'

const PostByTime = () => {
  const params = useParams();

  const monthName = useMemo(()=>{
const year = +params.year || 0;
const month = +params.month || 0;

if(!year || year <2000) return 'Unknown';
if(!month || month < 1|| month > 12) return 'Unknown';

const date = new Date(year, month, 1);
return format (date, 'MMMM yyyy');


  }, [params.year, params.month]);

  return (
    <div>
      <h1>
        Articles Contain Category
        <span className='text-primary'> {params.month} {params.year}</span>
      </h1>
      <PostSearch postQuery={{year: params.year, month: params.month}} />  
    </div>
  )
}

export default PostByTime;