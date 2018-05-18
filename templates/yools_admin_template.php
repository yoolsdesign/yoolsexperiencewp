<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Yools admin
 * Template Post Type: yools_admin
 *
 */

get_header(); ?>

<div class="yools-admin">

<div class="yools-logo">
<a href="
<?php if( !is_single('user-account') ): ?>
    <?php echo home_url(); ?>/website
<?php endif; ?>
<?php if( is_single('user-account') ): ?>
    https://www.yools.be/
<?php endif; ?>
"
<?php if( is_single('user-account') ): ?>
<?php echo 'target="_blank"'; ?>
<?php endif; ?>
>

<svg width="772px" height="253px" viewBox="0 0 772 253" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 49.2 (51160) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="logo_yools_color-(1)" fill-rule="nonzero">
            <path d="M244.4,99.6 L226.5,99.6 L230.9,75.7 L272.2,75.7 L286.2,186.5 C308.2,159 325.3,124.6 325.3,107 C325.3,100.7 323.4,97.9 318.4,97.9 C312.9,97.9 307.1,100.9 303,103.7 L293.9,85.8 C300.5,80.3 313.1,72.6 328.5,72.6 C346.4,72.6 355.2,82.8 355.2,101.5 C355.2,148.8 290.8,252.2 230.3,252.2 C213.8,252.2 201.4,244.5 192.6,234.9 L206.1,217.9 C211.3,222.3 219.9,227.5 229.2,227.5 C244.6,227.5 263,213.2 279.5,194.5 L257.5,194.5 L244.4,99.6 Z" id="Shape" fill="#625F5C"></path>
            <path d="M358,143.6 C358,107 381.4,72.6 427,72.6 C460.3,72.6 482.5,91 482.5,126.5 C482.5,163.1 459.1,197.5 413.5,197.5 C380.2,197.5 358,179 358,143.6 Z M450.1,126.2 C450.1,108.6 443.2,95.9 426.2,95.9 C402.6,95.9 390.4,120.7 390.4,143.8 C390.4,161.4 397.3,174.1 414.3,174.1 C438,174.1 450.1,149.3 450.1,126.2 Z" id="Shape" fill="#625F5C"></path>
            <path d="M488.4,143.6 C488.4,107 511.8,72.6 557.4,72.6 C590.7,72.6 613,91 613,126.5 C613,163.1 589.6,197.5 544,197.5 C510.7,197.5 488.4,179 488.4,143.6 Z M580.5,126.2 C580.5,108.6 573.6,95.9 556.6,95.9 C533,95.9 520.8,120.7 520.8,143.8 C520.8,161.4 527.7,174.1 544.7,174.1 C568.4,174.1 580.5,149.3 580.5,126.2 Z" id="Shape" fill="#625F5C"></path>
            <path d="M619,160.1 L642.9,24.5 L623.1,24.5 L627.5,0 L678.4,0 L649.8,161.4 C648.2,171 651.7,174 658.9,174 C663,174 667.4,173.2 671.3,171.8 L667.4,194.6 C662.2,196 655,197.4 647.9,197.4 C620.1,197.5 615.7,179 619,160.1 Z" id="Shape" fill="#625F5C"></path>
            <path d="M673.8,188.9 L677.7,166.1 C688.7,170.8 702.7,174.6 715.6,174.6 C732.4,174.6 737.6,168.3 737.6,162.2 C737.6,142.7 684.3,149.8 684.3,111.3 C684.3,90.4 700.2,72.5 734.1,72.5 C748.4,72.5 761.6,75.8 771.5,79.4 L767.6,101.4 C759.1,98.1 747.3,94.8 735.4,94.8 C719.4,94.8 715,100.9 715,106.4 C715,125.4 768.4,118.5 768.4,157.8 C768.4,172.9 760.4,197.4 716.1,197.4 C699.9,197.5 685.6,194.2 673.8,188.9 Z" id="Shape" fill="#625F5C"></path>
            <g id="Group" transform="translate(0.000000, 2.000000)">
                <path d="M123.2,123.8 C123.2,123.8 149.5,-17.9 84.8,2.5 C20.3,23 123.2,123.8 123.2,123.8 Z" id="Shape" fill="#C1E6EB"></path>
                <path d="M121.6,122.2 C121.6,122.2 26.9,13.5 2.8,76.8 C-21.4,140.1 121.6,122.2 121.6,122.2 Z" id="Shape" fill="#C1E6EB"></path>
                <path d="M110.1,102.4 C109.9,102 109.7,101.6 109.6,101.2 L74.8,115.6 C75.9,118.3 77.1,121.1 78.4,123.8 C88.9,145.8 104.1,164.6 123.7,179.8 C127.2,182.5 130.9,185.1 134.7,187.6 C144.8,182.9 153.4,176.4 160.4,168.6 C138.9,150.2 122,127.9 110.1,102.4 Z" id="Shape" fill="#53514E"></path>
                <path d="M179.9,131 C182,122.7 183,114.1 183,105.4 C183,93.1 180.9,82.4 177,73.4 L147.5,85.6 C147.7,86 147.9,86.4 148.1,86.8 C156,103.3 166.7,118.1 179.9,131 Z" id="Shape" fill="#53514E"></path>
                <path d="M36.9,131.2 L24.7,136.3 C27.8,169.8 48.2,189.5 78.7,194.5 C62.9,178.5 50.1,160 40.5,139.5 C39.2,136.7 38,134 36.9,131.2 Z" id="Shape" fill="#53514E"></path>
                <path d="M148.1,86.7 C147.9,86.3 147.7,85.9 147.5,85.5 L109.6,101.2 C109.8,101.6 110,102 110.1,102.4 C122,128 138.9,150.2 160.3,168.6 C169.8,158 176.3,145 179.8,130.9 C166.7,118.1 156,103.3 148.1,86.7 Z" id="Shape" fill="#F1D355"></path>
                <path d="M78.4,123.8 C77.1,121 75.9,118.3 74.8,115.6 L36.9,131.3 C38,134 39.2,136.8 40.5,139.5 C50.1,160.1 62.9,178.5 78.7,194.5 C83.9,195.4 89.3,195.8 95.1,195.8 C110.3,195.8 123.5,192.8 134.8,187.6 C131,185.1 127.3,182.5 123.8,179.8 C104.2,164.6 88.9,145.7 78.4,123.8 Z" id="Shape" fill="#F1D355"></path>
                <path d="M34.8,164.5 L8.1,165.4 L27.5,148.7 C27.5,148.7 35.5,152.4 34.8,164.5 Z" id="Shape" fill="#160B02"></path>
            </g>
            <g id="Group" transform="translate(303.000000, 214.000000)" fill="#625F5C">
                <path d="M17.2,25.2 L14.9,17.1 C14.6,16.2 14.1,14.2 13.4,11.1 L13.3,11.1 C12.7,13.9 12.2,15.9 11.8,17.1 L9.5,25.2 L5.4,25.2 L0.5,7.8 L4.3,7.8 L6.5,16.4 C7,18.5 7.4,20.3 7.6,21.9 L7.7,21.9 C7.8,21.1 8,20.3 8.2,19.3 C8.4,18.3 8.6,17.6 8.8,17.1 L11.4,7.9 L15.5,7.9 L18.1,17.1 C18.3,17.6 18.5,18.4 18.7,19.5 C18.9,20.6 19.1,21.4 19.1,22 L19.2,22 C19.4,20.7 19.7,18.9 20.3,16.6 L22.6,8 L26.3,8 L21.4,25.4 L17.2,25.4 L17.2,25.2 Z" id="Shape"></path>
                <path d="M36.8,25.5 C34.1,25.5 32,24.7 30.4,23.1 C28.9,21.5 28.1,19.3 28.1,16.6 C28.1,13.8 28.8,11.5 30.2,9.9 C31.6,8.3 33.6,7.5 36,7.5 C38.3,7.5 40.1,8.2 41.5,9.6 C42.8,11 43.5,12.9 43.5,15.4 L43.5,17.4 L32,17.4 C32.1,19.1 32.5,20.4 33.4,21.3 C34.3,22.2 35.5,22.7 37,22.7 C38,22.7 39,22.6 39.9,22.4 C40.8,22.2 41.7,21.9 42.8,21.4 L42.8,24.4 C41.9,24.8 41,25.1 40.1,25.3 C39.1,25.5 38,25.5 36.8,25.5 Z M36.2,10.3 C35,10.3 34.1,10.7 33.4,11.4 C32.7,12.1 32.3,13.2 32.1,14.7 L40,14.7 C40,13.3 39.6,12.2 39,11.4 C38.3,10.7 37.3,10.3 36.2,10.3 Z" id="Shape"></path>
                <path d="M56.7,7.5 C58.9,7.5 60.6,8.3 61.8,9.9 C63,11.5 63.6,13.7 63.6,16.5 C63.6,19.4 63,21.6 61.8,23.2 C60.6,24.8 58.9,25.6 56.7,25.6 C54.5,25.6 52.8,24.8 51.6,23.2 L51.3,23.2 L50.6,25.3 L47.8,25.3 L47.8,0.8 L51.5,0.8 L51.5,6.6 C51.5,7 51.5,7.7 51.4,8.5 C51.4,9.3 51.3,9.9 51.3,10.1 L51.5,10.1 C52.7,8.4 54.4,7.5 56.7,7.5 Z M55.8,10.5 C54.3,10.5 53.2,10.9 52.6,11.8 C51.9,12.7 51.6,14.1 51.6,16.2 L51.6,16.5 C51.6,18.6 51.9,20.1 52.6,21.1 C53.3,22 54.4,22.5 55.9,22.5 C57.2,22.5 58.2,22 58.9,20.9 C59.6,19.9 59.9,18.4 59.9,16.4 C59.8,12.5 58.5,10.5 55.8,10.5 Z" id="Shape"></path>
                <path d="M73.8,25.5 C71.6,25.5 69.9,24.7 68.7,23.1 C67.5,21.5 66.9,19.3 66.9,16.5 C66.9,13.6 67.5,11.4 68.7,9.8 C69.9,8.2 71.6,7.4 73.8,7.4 C76.1,7.4 77.8,8.2 79,9.9 L79.2,9.9 C79,8.7 78.9,7.7 78.9,6.9 L78.9,0.6 L82.6,0.6 L82.6,25.1 L79.7,25.1 L79.1,22.8 L79,22.8 C77.8,24.7 76.1,25.5 73.8,25.5 Z M74.8,22.5 C76.3,22.5 77.4,22.1 78.1,21.2 C78.8,20.3 79.1,19 79.2,17 L79.2,16.5 C79.2,14.3 78.8,12.8 78.1,11.8 C77.4,10.9 76.3,10.4 74.7,10.4 C73.4,10.4 72.4,10.9 71.7,12 C71,13.1 70.6,14.6 70.6,16.5 C70.6,18.4 70.9,19.9 71.6,20.9 C72.4,22 73.4,22.5 74.8,22.5 Z" id="Shape"></path>
                <path d="M95.6,25.5 C92.9,25.5 90.8,24.7 89.2,23.1 C87.7,21.5 86.9,19.3 86.9,16.6 C86.9,13.8 87.6,11.5 89,9.9 C90.4,8.3 92.4,7.5 94.8,7.5 C97.1,7.5 98.9,8.2 100.2,9.6 C101.5,11 102.2,12.9 102.2,15.4 L102.2,17.4 L90.6,17.4 C90.7,19.1 91.1,20.4 92,21.3 C92.9,22.2 94.1,22.7 95.6,22.7 C96.6,22.7 97.6,22.6 98.5,22.4 C99.4,22.2 100.3,21.9 101.4,21.4 L101.4,24.4 C100.5,24.8 99.6,25.1 98.7,25.3 C97.9,25.5 96.8,25.5 95.6,25.5 Z M94.9,10.3 C93.7,10.3 92.8,10.7 92.1,11.4 C91.4,12.1 91,13.2 90.8,14.7 L98.7,14.7 C98.7,13.3 98.3,12.2 97.7,11.4 C97,10.7 96.1,10.3 94.9,10.3 Z" id="Shape"></path>
                <path d="M118.3,20.3 C118.3,22 117.7,23.3 116.4,24.2 C115.2,25.1 113.4,25.6 111.1,25.6 C108.8,25.6 106.9,25.2 105.5,24.5 L105.5,21.3 C107.5,22.2 109.5,22.7 111.2,22.7 C113.5,22.7 114.6,22 114.6,20.6 C114.6,20.2 114.5,19.8 114.2,19.5 C113.9,19.2 113.5,18.9 113,18.6 C112.4,18.3 111.6,17.9 110.6,17.5 C108.6,16.7 107.2,15.9 106.5,15.2 C105.8,14.4 105.4,13.4 105.4,12.2 C105.4,10.7 106,9.6 107.2,8.7 C108.4,7.9 110,7.5 112.1,7.5 C114.1,7.5 116.1,7.9 117.9,8.7 L116.7,11.5 C114.8,10.7 113.2,10.3 112,10.3 C110,10.3 109.1,10.9 109.1,12 C109.1,12.5 109.4,13 109.9,13.4 C110.4,13.8 111.5,14.3 113.2,15 C114.6,15.6 115.7,16.1 116.3,16.5 C116.9,17 117.4,17.5 117.7,18.1 C118.1,18.7 118.3,19.4 118.3,20.3 Z" id="Shape"></path>
                <path d="M122.1,3.2 C122.1,2.5 122.3,2 122.6,1.7 C123,1.3 123.5,1.2 124.1,1.2 C124.8,1.2 125.3,1.4 125.6,1.7 C126,2.1 126.1,2.6 126.1,3.2 C126.1,3.8 125.9,4.3 125.6,4.7 C125.2,5.1 124.7,5.2 124.1,5.2 C123.4,5.2 122.9,5 122.6,4.7 C122.3,4.3 122.1,3.8 122.1,3.2 Z M126,25.2 L122.3,25.2 L122.3,7.8 L126,7.8 L126,25.2 Z" id="Shape"></path>
                <path d="M146,7.8 L146,9.8 L143,10.3 C143.3,10.7 143.5,11.1 143.7,11.7 C143.9,12.2 144,12.8 144,13.4 C144,15.2 143.4,16.6 142.1,17.6 C140.9,18.6 139.2,19.1 137,19.1 C136.4,19.1 135.9,19.1 135.5,19 C134.7,19.5 134.3,20.1 134.3,20.7 C134.3,21.1 134.5,21.4 134.9,21.6 C135.3,21.8 136,21.9 137,21.9 L140,21.9 C141.9,21.9 143.4,22.3 144.4,23.1 C145.4,23.9 145.9,25.1 145.9,26.6 C145.9,28.6 145.1,30.1 143.5,31.2 C141.9,32.3 139.5,32.8 136.4,32.8 C134,32.8 132.2,32.4 131,31.5 C129.8,30.7 129.1,29.5 129.1,27.9 C129.1,26.8 129.4,25.9 130.1,25.2 C130.8,24.5 131.7,24 132.9,23.7 C132.4,23.5 132,23.2 131.7,22.7 C131.4,22.2 131.2,21.7 131.2,21.2 C131.2,20.5 131.4,20 131.7,19.5 C132.1,19 132.6,18.6 133.3,18.2 C132.4,17.8 131.7,17.2 131.1,16.3 C130.5,15.4 130.3,14.4 130.3,13.2 C130.3,11.3 130.9,9.8 132.1,8.8 C133.3,7.8 135,7.2 137.2,7.2 C137.7,7.2 138.2,7.2 138.8,7.3 C139.3,7.4 139.7,7.4 140,7.5 L146,7.5 L146,7.8 Z M132.3,27.9 C132.3,28.7 132.7,29.3 133.4,29.7 C134.1,30.1 135.1,30.3 136.4,30.3 C138.4,30.3 139.9,30 140.9,29.4 C141.9,28.8 142.4,28.1 142.4,27.1 C142.4,26.3 142.1,25.8 141.6,25.5 C141.1,25.2 140.1,25 138.6,25 L135.8,25 C134.7,25 133.9,25.2 133.3,25.7 C132.6,26.4 132.3,27.1 132.3,27.9 Z M133.9,13.5 C133.9,14.6 134.2,15.4 134.7,16 C135.3,16.6 136.1,16.9 137.1,16.9 C139.2,16.9 140.3,15.8 140.3,13.5 C140.3,12.4 140,11.5 139.5,10.9 C139,10.3 138.2,10 137.1,10 C136,10 135.2,10.3 134.7,10.9 C134.2,11.4 133.9,12.3 133.9,13.5 Z" id="Shape"></path>
                <path d="M164.5,25.2 L160.8,25.2 L160.8,14.5 C160.8,13.2 160.5,12.2 160,11.5 C159.5,10.8 158.6,10.5 157.4,10.5 C155.8,10.5 154.7,11 154,11.9 C153.3,12.8 152.9,14.4 152.9,16.5 L152.9,25.2 L149.2,25.2 L149.2,7.8 L152.1,7.8 L152.6,10.1 L152.8,10.1 C153.3,9.3 154.1,8.6 155,8.2 C156,7.7 157,7.5 158.2,7.5 C162.4,7.5 164.5,9.6 164.5,13.9 L164.5,25.2 Z" id="Shape"></path>
                <path d="M182,25.2 L175.4,7.8 L179.3,7.8 L182.8,17.9 C183.4,19.6 183.8,21 183.9,22 L184,22 C184.1,21.2 184.5,19.9 185.1,17.9 L188.6,7.8 L192.5,7.8 L185.9,25.2 L182,25.2 Z" id="Shape"></path>
                <path d="M210.8,16.5 C210.8,19.3 210.1,21.6 208.6,23.2 C207.1,24.8 205.1,25.6 202.5,25.6 C200.9,25.6 199.4,25.2 198.2,24.5 C197,23.8 196,22.7 195.3,21.3 C194.6,19.9 194.3,18.3 194.3,16.5 C194.3,13.7 195,11.5 196.5,9.9 C197.9,8.3 200,7.5 202.6,7.5 C205.1,7.5 207.1,8.3 208.6,9.9 C210,11.6 210.8,13.7 210.8,16.5 Z M198.1,16.5 C198.1,20.5 199.6,22.5 202.6,22.5 C205.5,22.5 207,20.5 207,16.5 C207,12.5 205.5,10.5 202.6,10.5 C201,10.5 199.9,11 199.2,12 C198.5,13.1 198.1,14.6 198.1,16.5 Z" id="Shape"></path>
                <path d="M230.5,16.5 C230.5,19.3 229.8,21.6 228.3,23.2 C226.8,24.8 224.8,25.6 222.2,25.6 C220.6,25.6 219.1,25.2 217.9,24.5 C216.6,23.8 215.7,22.7 215,21.3 C214.3,19.9 214,18.3 214,16.5 C214,13.7 214.7,11.5 216.2,9.9 C217.6,8.3 219.7,7.5 222.3,7.5 C224.8,7.5 226.8,8.3 228.3,9.9 C229.7,11.6 230.5,13.7 230.5,16.5 Z M217.8,16.5 C217.8,20.5 219.3,22.5 222.3,22.5 C225.2,22.5 226.7,20.5 226.7,16.5 C226.7,12.5 225.2,10.5 222.3,10.5 C220.7,10.5 219.6,11 218.9,12 C218.2,13.1 217.8,14.6 217.8,16.5 Z" id="Shape"></path>
                <path d="M243.6,7.5 C244.3,7.5 245,7.6 245.4,7.7 L245,11.1 C244.5,11 243.9,10.9 243.4,10.9 C241.9,10.9 240.7,11.4 239.8,12.3 C238.9,13.3 238.4,14.5 238.4,16.1 L238.4,25.2 L234.7,25.2 L234.7,7.8 L237.6,7.8 L238.1,10.9 L238.3,10.9 C238.9,9.9 239.6,9 240.6,8.4 C241.5,7.8 242.5,7.5 243.6,7.5 Z" id="Shape"></path>
                <path d="M272.5,16.5 C272.5,19.3 271.8,21.6 270.3,23.2 C268.8,24.8 266.8,25.6 264.2,25.6 C262.6,25.6 261.1,25.2 259.9,24.5 C258.7,23.8 257.7,22.7 257,21.3 C256.3,19.9 256,18.3 256,16.5 C256,13.7 256.7,11.5 258.2,9.9 C259.6,8.3 261.7,7.5 264.3,7.5 C266.8,7.5 268.8,8.3 270.3,9.9 C271.7,11.6 272.5,13.7 272.5,16.5 Z M259.8,16.5 C259.8,20.5 261.3,22.5 264.3,22.5 C267.2,22.5 268.7,20.5 268.7,16.5 C268.7,12.5 267.2,10.5 264.3,10.5 C262.7,10.5 261.6,11 260.9,12 C260.1,13.1 259.8,14.6 259.8,16.5 Z" id="Shape"></path>
                <path d="M292.1,25.2 L288.4,25.2 L288.4,14.5 C288.4,13.2 288.1,12.2 287.6,11.5 C287.1,10.8 286.2,10.5 285,10.5 C283.4,10.5 282.3,11 281.6,11.9 C280.9,12.8 280.5,14.4 280.5,16.5 L280.5,25.2 L276.8,25.2 L276.8,7.8 L279.7,7.8 L280.2,10.1 L280.4,10.1 C280.9,9.3 281.7,8.6 282.6,8.2 C283.6,7.7 284.6,7.5 285.8,7.5 C290,7.5 292.1,9.6 292.1,13.9 L292.1,25.2 Z" id="Shape"></path>
                <path d="M303.1,25.5 C300.9,25.5 299.2,24.7 298,23.1 C296.8,21.5 296.2,19.3 296.2,16.5 C296.2,13.6 296.8,11.4 298.1,9.8 C299.3,8.2 301,7.4 303.2,7.4 C305.5,7.4 307.2,8.2 308.4,9.9 L308.6,9.9 C308.4,8.7 308.3,7.7 308.3,6.9 L308.3,0.6 L312,0.6 L312,25.1 L309.1,25.1 L308.5,22.8 L308.3,22.8 C307.1,24.7 305.4,25.5 303.1,25.5 Z M304.1,22.5 C305.6,22.5 306.7,22.1 307.4,21.2 C308.1,20.3 308.5,19 308.5,17 L308.5,16.5 C308.5,14.3 308.1,12.8 307.4,11.8 C306.7,10.9 305.6,10.4 304,10.4 C302.7,10.4 301.7,10.9 301,12 C300.3,13.1 299.9,14.6 299.9,16.5 C299.9,18.4 300.2,19.9 300.9,20.9 C301.7,22 302.7,22.5 304.1,22.5 Z" id="Shape"></path>
                <path d="M324.9,25.5 C322.2,25.5 320.1,24.7 318.5,23.1 C317,21.5 316.2,19.3 316.2,16.6 C316.2,13.8 316.9,11.5 318.3,9.9 C319.7,8.3 321.7,7.5 324.1,7.5 C326.4,7.5 328.2,8.2 329.5,9.6 C330.8,11 331.5,12.9 331.5,15.4 L331.5,17.4 L319.9,17.4 C320,19.1 320.4,20.4 321.3,21.3 C322.2,22.2 323.4,22.7 324.9,22.7 C325.9,22.7 326.9,22.6 327.8,22.4 C328.7,22.2 329.6,21.9 330.7,21.4 L330.7,24.4 C329.8,24.8 328.9,25.1 328,25.3 C327.1,25.5 326.1,25.5 324.9,25.5 Z M324.2,10.3 C323,10.3 322.1,10.7 321.4,11.4 C320.7,12.1 320.3,13.2 320.1,14.7 L328,14.7 C328,13.3 327.6,12.2 327,11.4 C326.3,10.7 325.4,10.3 324.2,10.3 Z" id="Shape"></path>
                <path d="M344.7,7.5 C345.4,7.5 346.1,7.6 346.5,7.7 L346.1,11.1 C345.6,11 345,10.9 344.5,10.9 C343,10.9 341.8,11.4 340.9,12.3 C340,13.3 339.5,14.5 339.5,16.1 L339.5,25.2 L335.8,25.2 L335.8,7.8 L338.7,7.8 L339.2,10.9 L339.4,10.9 C340,9.9 340.7,9 341.7,8.4 C342.6,7.8 343.6,7.5 344.7,7.5 Z" id="Shape"></path>
                <path d="M365.1,25.2 L361.4,25.2 L361.4,14.5 C361.4,13.2 361.1,12.2 360.6,11.5 C360.1,10.8 359.2,10.5 358,10.5 C356.4,10.5 355.3,11 354.6,11.9 C353.9,12.8 353.5,14.4 353.5,16.5 L353.5,25.2 L349.8,25.2 L349.8,7.8 L352.7,7.8 L353.2,10.1 L353.4,10.1 C353.9,9.3 354.7,8.6 355.6,8.2 C356.6,7.7 357.6,7.5 358.8,7.5 C363,7.5 365.1,9.6 365.1,13.9 L365.1,25.2 Z" id="Shape"></path>
                <path d="M377.9,25.5 C375.2,25.5 373.1,24.7 371.5,23.1 C370,21.5 369.2,19.3 369.2,16.6 C369.2,13.8 369.9,11.5 371.3,9.9 C372.7,8.3 374.7,7.5 377.1,7.5 C379.4,7.5 381.2,8.2 382.5,9.6 C383.8,11 384.5,12.9 384.5,15.4 L384.5,17.4 L373,17.4 C373.1,19.1 373.5,20.4 374.4,21.3 C375.3,22.2 376.5,22.7 378,22.7 C379,22.7 380,22.6 380.9,22.4 C381.8,22.2 382.7,21.9 383.8,21.4 L383.8,24.4 C382.9,24.8 382,25.1 381.1,25.3 C380.1,25.5 379.1,25.5 377.9,25.5 Z M377.2,10.3 C376,10.3 375.1,10.7 374.4,11.4 C373.7,12.1 373.3,13.2 373.1,14.7 L381,14.7 C381,13.3 380.6,12.2 380,11.4 C379.3,10.7 378.4,10.3 377.2,10.3 Z" id="Shape"></path>
                <path d="M403.5,25.2 L399.8,25.2 L399.8,14.5 C399.8,13.2 399.5,12.2 399,11.5 C398.5,10.8 397.7,10.5 396.6,10.5 C395.2,10.5 394.1,11 393.5,11.9 C392.8,12.8 392.5,14.4 392.5,16.5 L392.5,25.2 L388.8,25.2 L388.8,7.8 L391.7,7.8 L392.2,10.1 L392.4,10.1 C392.9,9.3 393.6,8.6 394.5,8.2 C395.4,7.7 396.4,7.5 397.5,7.5 C400.2,7.5 401.9,8.4 402.8,10.2 L403.1,10.2 C403.6,9.3 404.3,8.7 405.3,8.2 C406.2,7.7 407.3,7.5 408.5,7.5 C410.6,7.5 412.1,8 413,9.1 C414,10.1 414.4,11.8 414.4,13.9 L414.4,25.3 L410.7,25.3 L410.7,14.6 C410.7,13.3 410.4,12.3 409.9,11.6 C409.4,10.9 408.6,10.6 407.5,10.6 C406.1,10.6 405,11 404.3,11.9 C403.6,12.8 403.3,14.2 403.3,16 L403.3,25.2 L403.5,25.2 Z" id="Shape"></path>
                <path d="M427.3,25.5 C424.6,25.5 422.5,24.7 420.9,23.1 C419.4,21.5 418.6,19.3 418.6,16.6 C418.6,13.8 419.3,11.5 420.7,9.9 C422.1,8.3 424.1,7.5 426.5,7.5 C428.8,7.5 430.6,8.2 432,9.6 C433.3,11 434,12.9 434,15.4 L434,17.4 L422.4,17.4 C422.5,19.1 422.9,20.4 423.8,21.3 C424.7,22.2 425.9,22.7 427.4,22.7 C428.4,22.7 429.4,22.6 430.3,22.4 C431.2,22.2 432.1,21.9 433.2,21.4 L433.2,24.4 C432.3,24.8 431.4,25.1 430.5,25.3 C429.5,25.5 428.5,25.5 427.3,25.5 Z M426.6,10.3 C425.4,10.3 424.5,10.7 423.8,11.4 C423.1,12.1 422.7,13.2 422.5,14.7 L430.4,14.7 C430.4,13.3 430,12.2 429.4,11.4 C428.7,10.7 427.8,10.3 426.6,10.3 Z" id="Shape"></path>
                <path d="M447.1,7.5 C447.8,7.5 448.5,7.6 448.9,7.7 L448.5,11.1 C448,11 447.4,10.9 446.9,10.9 C445.4,10.9 444.2,11.4 443.3,12.3 C442.4,13.3 441.9,14.5 441.9,16.1 L441.9,25.2 L438.2,25.2 L438.2,7.8 L441.1,7.8 L441.6,10.9 L441.8,10.9 C442.4,9.9 443.1,9 444.1,8.4 C445,7.8 446,7.5 447.1,7.5 Z" id="Shape"></path>
                <path d="M463.9,20.3 C463.9,22 463.3,23.3 462,24.2 C460.8,25.1 459,25.6 456.7,25.6 C454.4,25.6 452.5,25.2 451.1,24.5 L451.1,21.3 C453.1,22.2 455.1,22.7 456.8,22.7 C459.1,22.7 460.2,22 460.2,20.6 C460.2,20.2 460.1,19.8 459.8,19.5 C459.5,19.2 459.1,18.9 458.6,18.6 C458,18.3 457.2,17.9 456.2,17.5 C454.2,16.7 452.8,15.9 452.1,15.2 C451.4,14.4 451,13.4 451,12.2 C451,10.7 451.6,9.6 452.8,8.7 C454,7.9 455.6,7.5 457.7,7.5 C459.7,7.5 461.7,7.9 463.5,8.7 L462.3,11.5 C460.4,10.7 458.8,10.3 457.6,10.3 C455.6,10.3 454.7,10.9 454.7,12 C454.7,12.5 455,13 455.5,13.4 C456,13.8 457.1,14.3 458.8,15 C460.2,15.6 461.3,16.1 461.9,16.5 C462.6,17 463,17.5 463.3,18.1 C463.7,18.7 463.9,19.4 463.9,20.3 Z" id="Shape"></path>
            </g>
        </g>
    </g>
</svg>
</a>
</div> <!-- .yools-logo -->
    
<?php the_content(); ?>

</div> <!-- .yools-admin -->

<?php
get_sidebar();


