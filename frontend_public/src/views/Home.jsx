import { Button, Card, Carousel, CarouselItem, Col, Container, Form, Row } from "react-bootstrap"

const Home = () => {
  return (
    <>
      <header className="bg-batt d-block d-md-block">
        <Container>
          <Carousel variant="dark" className="carousel-padding">
            <CarouselItem>
              <img src="/assets/images/batt_cargo_reguler.jpg" className="d-block w-75" />
            </CarouselItem>
            <CarouselItem>
              <img src="/assets/images/batt_cargo_ekonomis.jpg" className="d-block w-75" />
            </CarouselItem>
            <CarouselItem>
              <img src="/assets/images/batt_cargo_express.jpg" className="d-block w-75" />
            </CarouselItem>
          </Carousel>
        </Container>
      </header>
      <Container>
        <Row>
          <Col md={4} className="d-flex">
            <Card className="mb-4 w-100">
              <Card.Body className="d-flex flex-column">
                <Form.Label htmlFor="nomor_resi" className="fw-bold">Lacak Pengiriman</Form.Label>
                <Row className="d-flex flex-row justify-content-between">
                  <Col sm={8} className="p-0">
                    <Form.Control type="text" id="nomor_resi" name="nomor_resi" placeholder="Masukkan nomor resi" />
                  </Col>
                  <Col sm={4} className="p-0 pl-auto">
                    <Button className="bg-batt button-custom">Lacak</Button>
                  </Col>
                </Row>
              </Card.Body>
            </Card>
          </Col>
        </Row>
      </Container>
    </>
  )
}

export default Home