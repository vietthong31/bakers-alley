<x-layout pageTitle="Liên hệ">

    <x-inner-header innerTitle="Liên hệ" />

    <div class="beta-map">

        <div class="abs-fullwidth beta-map wow flipInX"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.522428876195!2d106.68883801474408!3d10.771241362234838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c46462e73%3A0x82ad2593d42baae0!2zTMOqIFRo4buLIFJpw6puZywgQuG6v24gVGjDoG5oLCBRdeG6rW4gMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1666787648481!5m2!1sen!2s"></iframe>
        </div>
    </div>

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="space50">&nbsp;</div>
            <div class="row">
                <div class="col-sm-8">
                    <h2>Gửi tin nhắn</h2>
                    <div class="space20">&nbsp;</div>
                    <div class="space20">&nbsp;</div>
                    <form action="#" method="post" class="contact-form">
                        <div class="form-block">
                            <input name="your-name" type="text" placeholder="Your Name (required)">
                        </div>
                        <div class="form-block">
                            <input name="your-email" type="email" placeholder="Your Email (required)">
                        </div>
                        <div class="form-block">
                            <input name="your-subject" type="text" placeholder="Subject">
                        </div>
                        <div class="form-block">
                            <textarea name="your-message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="beta-btn primary">Gửi <i
                                    class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h2>Thông tin liên hệ</h2>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Địa chỉ</h6>
                    <p>
                        90 - 92 Lê Thị Riêng,<br>
                        Bến Thành, Quận 1<br>
                        TP. Hồ Chí Minh
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Số điện thoại</h6>
                    <p>
                        0163 296 7751
                    </p>
                    {{-- <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Employment</h6>
                    <p>
                        We're always looking for talented persons to <br>
                        join our team. <br>
                        <a href="hr@betadesign.com">hr@betadesign.com</a>
                    </p> --}}
                </div>
            </div>
        </div> <!-- #content -->
    </div>
</x-layout>
