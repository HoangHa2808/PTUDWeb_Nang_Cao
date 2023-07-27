import './NavbarStyles.scss';
import '../Main.scss'
import {Component} from 'react';
import { MenuItems } from './MenuItems';
import {Link} from 'react-router-dom'

class Navbar extends Component{
    render(){
        return(
            <nav className='NavbarItems d-flex align-items-center'>
                <h1 className='navbar-logo'>TravelDalat</h1>
                <ul className='navbar-menu d-flex align-items-center d-flex justify-content-between'>
                    {MenuItems.map((item, index) => {
                        return(
                            <li key={index}>
                                <Link className={item.cName} to={item.url}>
                                <i className={item.icon}></i>
                                {item.title}
                                </Link>
                            </li>

                        )
                    })}
                </ul>
                <button className='navbar-btn'>Booking</button>
            </nav>
        )
    }
}

export default Navbar;