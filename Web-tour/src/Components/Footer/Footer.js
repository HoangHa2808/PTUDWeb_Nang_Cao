import "./FooterStyle.scss";
import Home from '../../Pages/home/Home'

const Footer = () => {
  return (
    <div className="footer">
      <div className="footer-wrap">
        <div className="footer__header">
          <div className="footer__header-left">
            <h2>Travel with us</h2>
          </div>
          <div className="footer__header-right">
            <div className="footer__header-right-email">
              <input
                type="email"
                placeholder="Enter your email address"
              ></input>
            </div>
            <div className="footer__header-right-submit">
              <input type="submit" value="SEND"></input>
            </div>
          </div>
        </div>
        <div className="footer__top">
          <div className="footer__top-left">
            <a href={Home}>TravelDaLat</a>
            <p>Choose your favorite destination.</p>
          </div>
          <div className="footer__top-right">
            <a href="/">
              <i className="fab fa-facebook-f"></i>
            </a>
            <a href="/">
              <i className="fab fa-instagram"></i>
            </a>
            <a href="/">
              <i className="fab fa-twitter"></i>
            </a>
            <a href="/">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Footer;
