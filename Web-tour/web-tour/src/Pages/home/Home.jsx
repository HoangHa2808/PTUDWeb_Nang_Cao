import Navbar from "../../Components/Navbar/Navbar";
import Header from "../../Header/Header";
import Posts from "../../Posts/Posts";
import "./home.css";
import Footer from "../../Components/Footer/Footer";

export default function Home() {
  return (
    <div>
      <Navbar />
      <div className="home">
        <Header />
        <Posts />
        <Footer/>
      </div>
    </div>
  );
}
