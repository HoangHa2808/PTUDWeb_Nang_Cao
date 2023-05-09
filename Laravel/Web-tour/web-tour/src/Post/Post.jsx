import './post.css'
import ThumImg1 from "../assets/thum1.jpg"

export default function Post() {
  return (
    <div className='post'>
      <div class="card">
      
        <div class="card-details">
        <image className="ImgCard" src='https://images.unsplash.com/photo-1613903491514-b3655f390093?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1333&q=80' alt=""></image>
            <p class="text-title">Card title</p>
            <p class="text-body">Here are the details of the card</p>
        </div>
        <button class="card-button">More info</button>
        </div>
    </div>
  )
}
