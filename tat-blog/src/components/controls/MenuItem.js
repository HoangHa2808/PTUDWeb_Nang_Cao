import React from 'react'

const MenuItem = ({link, title}) => {
  return (
    <li className="nav-item">
        <link className="nav-link" href={link}>
            {title}
        </link>
    </li>
  )
}

export default MenuItem;