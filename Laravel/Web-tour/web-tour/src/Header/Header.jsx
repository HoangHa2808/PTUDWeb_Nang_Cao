import "./header.css"
import ThumImg from "../assets/HomeImg.jpg"
export default function Header() {
  return (
    <div className='header'>
        <img className="Thum" src={ThumImg} alt="ThumImg" />
    </div>
  )
}
