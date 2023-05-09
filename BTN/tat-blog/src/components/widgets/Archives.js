import React from 'react'

const Archives = () => {
  return (
    <div className="mb-3">
      <h4 className='mb-3 text-danger'>
        Archives
      </h4>

      <div className="list-group list-group-flush">
        <a
          className="list-group-item d-flex justify-content-between align-items-start"
          href='/archives/2023/3'
        >
          <div className="me-auto">
            March 2023
          </div>
          <span className="badge bg-primary rounded-pill">
            4
          </span>
        </a>
        <a
          className="list-group-item d-flex justify-content-between align-items-start"
          href='/archives/2023/2'
        >
          <div className="me-auto">
            February 2023
          </div>
          <span className="badge bg-primary rounded-pill">
            10
          </span>
        </a>
        <a
          className="list-group-item d-flex justify-content-between align-items-start"
          href='/archives/2023/1'
        >
          <div className="me-auto">
            January 2023
          </div>
          <span className="badge bg-primary rounded-pill">
            1
          </span>
        </a>
        <a
          className="list-group-item d-flex justify-content-between align-items-start"
          href='/archives/2022/11'
        >
          <div className="me-auto">
            November 2022
          </div>
          <span className="badge bg-primary rounded-pill">
            14
          </span>
        </a>
        <a
          className="list-group-item d-flex justify-content-between align-items-start"
          href='/archives/2022/9'
        >
          <div className="me-auto">
            September 2022
          </div>
          <span className="badge bg-primary rounded-pill">
            9
          </span>
        </a>
      </div>
    </div>
  )
}

export default Archives;