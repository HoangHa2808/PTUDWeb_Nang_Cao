import React from 'react'

const NewsletterForm = () => {
  return (
    <div className="mb-4">
      <h4 className='mb-3 text-primary'>
        Newsletter
      </h4>
      <p>
        Do not want to miss any news and updates, then
        please subscribe to our mailing list.
      </p>
      <form>
        <div className="mb-3">
          <input 
            type="email" 
            className="form-control" 
            placeholder='Email address' />
        </div>
        <button 
          type="submit" 
          className="btn btn-primary">
            Subscribe
        </button>
      </form>
    </div>
  )
}

export default NewsletterForm;