import "../../Components/Main.scss";
import "./ContactStyle.scss";
import "bootstrap/dist/css/bootstrap.min.css";
import Navbar from "../../Components/Navbar/Navbar";
import Footer from "../../Components/Footer/Footer";
import ContactHero from "../../assets/ContactHero.jpg";

function Contact() {
  return (
    <div className="contact">
      <Navbar />

      <div className="contact__hero">
        <div className="contact__hero-img">
          <img src={ContactHero} alt="ContactHero" />
        </div>

        <div className="contact__hero-text">
          <h1>LIÊN HỆ</h1>
        </div>
      </div>

      <div className="contact__form">
        <div className="contact__form-container d-flex flex-column">
          <div className="contact__form-container_title">
            <h1>Thông tin liên hệ</h1>
            <p>
              Nếu quý khách có thắc mắc hay đóng góp xin vui lòng điền vào Form
              dưới đây và gửi cho chúng tôi. Xin chân thành cảm ơn!
            </p>
          </div>

          <div className="contact__form-container_info d-flex align-items-center justify-content-between">
            <div className="col-6">
              <div className="contact__form-container_info-content d-flex flex-column me-2">
                <label>Họ và tên (*)</label>
                <input type="text" name="name" />
              </div>
            </div>
            <div className="col-6">
              <div className="contact__form-container_info-content d-flex flex-column ms-2">
                <label>Email (*)</label>
                <input type="email" name="email" />
              </div>
            </div>
          </div>

          <div className="row">
            <div className="col-12">
              <div className="contact__form-container_content">
                <label>Tiêu đề (*)</label>
                <input type="text" name="content" />
              </div>
            </div>
          </div>

          <div className="row">
            <div className="col-12">
              <div className="contact__form-container_message">
                <label>Nội dung (*)</label>
                <input type="text" name="message" />
              </div>
            </div>
          </div>

          <div className="row contact__form-container_contact">
            <div className="col-2 mt-2">
              <a
                href="/contact"
                className="btnLink contact__form-container_contact-btnSend"
              >
                <span className="btnSecond ">SEND</span>
              </a>
            </div>
            {/* d-flex flex-column align-items-center */}
            <div className="col-10">
              <div className="contact__form-container_contact-info d-inline">
                <ul className="d-flex justify-content-between align-items-center">
                  <li className="me-5">
                    <i class="fa-solid fa-phone"></i>
                    0263 3822 246
                  </li>
                  <li>
                    <i class="fa-solid fa-envelope"></i>
                    info@travel.vn
                  </li>
                <p>
                  <i class="fa-solid fa-location-dot"></i>1 Phù Đổng Thiên
                  Vương, P8, TP.Đà Lạt
                </p>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <Footer />
    </div>
  );
}

export default Contact;
