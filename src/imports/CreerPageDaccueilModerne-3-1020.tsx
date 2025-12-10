import svgPaths from "./svg-a26rkphtbb";
import imgImageProcessusDachatSimplifie from "figma:asset/b854e356a4723af7606bc1c6a6d9ae5f581b89d1.png";
import { imgVector } from "./svg-s7vpo";

function Calque1() {
  return (
    <div className="absolute bottom-[0.02%] contents left-0 right-[0.03%] top-0" data-name="Calque_1">
      <div className="absolute bottom-[0.02%] left-[64.82%] mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[-31.112px_0px] mask-size-[47.985px_31.99px] right-[0.03%] top-0" data-name="Vector" style={{ maskImage: `url('${imgVector}')` }}>
        <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 17 32">
          <path d={svgPaths.p2133f840} fill="var(--fill-0, #D2A30B)" id="Vector" />
        </svg>
      </div>
      <div className="absolute bottom-[0.02%] left-0 mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[0px] mask-size-[47.985px_31.99px] right-[40.39%] top-0" data-name="Vector_2" style={{ maskImage: `url('${imgVector}')` }}>
        <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 29 32">
          <path d={svgPaths.p28d89680} fill="var(--fill-0, #D2A30B)" id="Vector_2" />
        </svg>
      </div>
    </div>
  );
}

function ClipPathGroup() {
  return (
    <div className="absolute bottom-[0.02%] contents left-0 right-[0.03%] top-0" data-name="Clip path group">
      <Calque1 />
    </div>
  );
}

function Icon() {
  return (
    <div className="h-[31.998px] overflow-clip relative shrink-0 w-full" data-name="Icon">
      <ClipPathGroup />
    </div>
  );
}

function Calque() {
  return (
    <div className="absolute content-stretch flex flex-col h-[31.998px] items-start left-0 top-0 w-[47.997px]" data-name="Calque">
      <Icon />
    </div>
  );
}

function Text() {
  return (
    <div className="absolute h-[27.998px] left-[60px] top-[1.99px] w-[136.106px]" data-name="Text">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[#1a1a1a] text-[20px] text-nowrap top-[-0.79px] whitespace-pre">Digital Kappa</p>
    </div>
  );
}

function Link() {
  return (
    <div className="absolute h-[31.998px] left-0 top-[16px] w-[196.102px]" data-name="Link">
      <Calque />
      <Text />
    </div>
  );
}

function TextInput() {
  return (
    <div className="absolute bg-gray-50 h-[42.386px] left-0 rounded-[10px] top-0 w-[671.998px]" data-name="Text Input">
      <div className="content-stretch flex h-[42.386px] items-center overflow-clip pl-[44px] pr-[80px] py-[10px] relative rounded-[inherit] w-[671.998px]">
        <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[normal] relative shrink-0 text-[14px] text-[rgba(10,10,10,0.5)] text-nowrap whitespace-pre">Rechercher un produit, ebook, template...</p>
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[10px]" />
    </div>
  );
}

function Icon1() {
  return (
    <div className="absolute left-[16px] size-[17.989px] top-[12.2px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 18 18">
        <g id="Icon">
          <path d={svgPaths.p318b3940} id="Vector" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.49912" />
          <path d={svgPaths.p1509a280} id="Vector_2" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.49912" />
        </g>
      </svg>
    </div>
  );
}

function Container() {
  return (
    <div className="absolute h-[42.386px] left-[370.04px] top-[10.81px] w-[671.998px]" data-name="Container">
      <TextInput />
      <Icon1 />
    </div>
  );
}

function Container1() {
  return <div className="absolute left-[1215.98px] size-0 top-[32px]" data-name="Container" />;
}

function Container2() {
  return (
    <div className="h-[63.996px] relative shrink-0 w-full" data-name="Container">
      <Link />
      <Container />
      <Container1 />
    </div>
  );
}

function Container3() {
  return (
    <div className="h-[65.209px] relative shrink-0 w-full" data-name="Container">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-gray-100 border-solid inset-0 pointer-events-none" />
      <div className="size-full">
        <div className="content-stretch flex flex-col h-[65.209px] items-start pb-[1.213px] pt-0 px-[112.031px] relative w-full">
          <Container2 />
        </div>
      </div>
    </div>
  );
}

function Link1() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[112.03px] pb-[1.213px] pt-0 px-0 top-0 w-[50.973px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">Accueil</p>
    </div>
  );
}

function Link2() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[195px] pb-[1.213px] pt-0 px-0 top-0 w-[123.557px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">Tous nos produits</p>
    </div>
  );
}

function Link3() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[350.56px] pb-[1.213px] pt-0 px-0 top-0 w-[51.409px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">Ebooks</p>
    </div>
  );
}

function Link4() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[433.96px] pb-[1.213px] pt-0 px-0 top-0 w-[87.18px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">Applications</p>
    </div>
  );
}

function Link5() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[553.14px] pb-[1.213px] pt-0 px-0 top-0 w-[72.754px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">Templates</p>
    </div>
  );
}

function Link6() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[657.89px] pb-[1.213px] pt-0 px-0 top-0 w-[32.681px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">Blog</p>
    </div>
  );
}

function Link7() {
  return (
    <div className="absolute content-stretch flex h-[47.997px] items-center left-[722.57px] pb-[1.213px] pt-0 px-0 top-0 w-[30.027px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-[rgba(0,0,0,0)] border-solid inset-0 pointer-events-none" />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#364153] text-[14px] text-nowrap whitespace-pre">FAQ</p>
    </div>
  );
}

function Container4() {
  return (
    <div className="bg-white h-[47.997px] relative shrink-0 w-full" data-name="Container">
      <Link1 />
      <Link2 />
      <Link3 />
      <Link4 />
      <Link5 />
      <Link6 />
      <Link7 />
    </div>
  );
}

function Navigation() {
  return (
    <div className="bg-white content-stretch flex flex-col h-[114.42px] items-start pb-[1.213px] pt-0 px-0 relative shrink-0 w-[1440.07px]" data-name="Navigation">
      <div aria-hidden="true" className="absolute border-[0px_0px_1.213px] border-gray-200 border-solid inset-0 pointer-events-none" />
      <Container3 />
      <Container4 />
    </div>
  );
}

function Text1() {
  return <div className="absolute bg-[#d2a30b] left-[16px] rounded-[4.07082e+07px] size-[8px] top-[13.99px]" data-name="Text" />;
}

function Text2() {
  return (
    <div className="absolute h-[19.999px] left-[32px] top-[8px] w-[127.481px]" data-name="Text">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-[64px] text-[#0d1421] text-[14px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">Simple et sécurisé</p>
    </div>
  );
}

function Container5() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-100 border-solid h-[38.424px] left-[359.03px] rounded-[4.07082e+07px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)] top-0 w-[177.904px]" data-name="Container">
      <Text1 />
      <Text2 />
    </div>
  );
}

function Heading() {
  return (
    <div className="absolute h-[59.996px] left-0 top-[62.42px] w-[895.985px]" data-name="Heading 1">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[60px] left-[448.33px] not-italic text-[#0d1421] text-[60px] text-center text-nowrap top-[-0.49px] translate-x-[-50%] whitespace-pre">Comment ça marche ?</p>
    </div>
  );
}

function Paragraph() {
  return (
    <div className="absolute h-[55.997px] left-[111.99px] top-[146.42px] w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[336.19px] text-[18px] text-[rgba(13,20,33,0.7)] text-center top-[-0.57px] translate-x-[-50%] w-[619px]">Achetez et téléchargez vos produits digitaux en quelques clics. Notre processus simplifié vous garantit un accès immédiat à vos achats.</p>
    </div>
  );
}

function Container6() {
  return (
    <div className="h-[202.414px] relative shrink-0 w-[895.985px]" data-name="Container">
      <Container5 />
      <Heading />
      <Paragraph />
    </div>
  );
}

function Container7() {
  return <div className="absolute bg-[rgba(210,163,11,0.05)] blur-3xl filter left-[560.03px] rounded-[4.07082e+07px] size-[320px] top-0" data-name="Container" />;
}

function Section() {
  return (
    <div className="bg-gray-50 relative shrink-0 w-full" data-name="Section">
      <div className="flex flex-col items-center size-full">
        <div className="content-stretch flex flex-col items-center p-[80px] relative w-full">
          <Container6 />
          <Container7 />
        </div>
      </div>
    </div>
  );
}

function Icon2() {
  return (
    <div className="relative shrink-0 size-[39.998px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 40 40">
        <g id="Icon">
          <path d={svgPaths.pbe0600} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
          <path d={svgPaths.p32fa0280} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
        </g>
      </svg>
    </div>
  );
}

function Container8() {
  return (
    <div className="absolute bg-white content-stretch flex items-center justify-center left-[135.99px] p-[1.213px] rounded-[16px] size-[79.995px] top-0" data-name="Container">
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-100 border-solid inset-0 pointer-events-none rounded-[16px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)]" />
      <Icon2 />
    </div>
  );
}

function Text3() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[5.782px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[5.782px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[3px] text-[16px] text-center text-nowrap text-white top-[-0.79px] translate-x-[-50%] whitespace-pre">1</p>
      </div>
    </div>
  );
}

function Container9() {
  return (
    <div className="absolute bg-[#d2a30b] content-stretch flex items-center justify-center left-[159.99px] pl-0 pr-[0.019px] py-0 rounded-[4.07082e+07px] size-[31.998px] top-[103.99px]" data-name="Container">
      <Text3 />
    </div>
  );
}

function Heading2() {
  return (
    <div className="absolute h-[31.998px] left-[115.23px] top-[151.99px] w-[121.528px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[32px] left-[61px] not-italic text-[#0d1421] text-[24px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">Parcourez</p>
    </div>
  );
}

function Paragraph1() {
  return (
    <div className="absolute h-[95.994px] left-0 top-[195.99px] w-[351.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[176.35px] text-[16px] text-[rgba(13,20,33,0.7)] text-center top-[-0.79px] translate-x-[-50%] w-[350px]">Explorez notre catalogue de produits digitaux : applications, ebooks et templates. Utilisez les filtres pour trouver exactement ce dont vous avez besoin.</p>
    </div>
  );
}

function Container10() {
  return (
    <div className="absolute h-[291.983px] left-0 top-0 w-[351.998px]" data-name="Container">
      <Container8 />
      <Container9 />
      <Heading2 />
      <Paragraph1 />
    </div>
  );
}

function Container11() {
  return <div className="absolute bg-gradient-to-b from-[#d2a30b] h-[1.99px] left-[351.99px] to-[rgba(0,0,0,0)] top-[40px] w-[351.998px]" data-name="Container" />;
}

function Container12() {
  return (
    <div className="absolute h-[291.983px] left-[144.03px] top-[95.99px] w-[351.998px]" data-name="Container">
      <Container10 />
      <Container11 />
    </div>
  );
}

function Icon3() {
  return (
    <div className="relative shrink-0 size-[39.998px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 40 40">
        <g id="Icon">
          <path d={svgPaths.p3290c480} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
          <path d="M3.33311 16.6657H36.6645" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
        </g>
      </svg>
    </div>
  );
}

function Container13() {
  return (
    <div className="absolute bg-white content-stretch flex items-center justify-center left-[135.99px] p-[1.213px] rounded-[16px] size-[79.995px] top-0" data-name="Container">
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-100 border-solid inset-0 pointer-events-none rounded-[16px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)]" />
      <Icon3 />
    </div>
  );
}

function Text4() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[9.099px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[9.099px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[5px] text-[16px] text-center text-nowrap text-white top-[-0.79px] translate-x-[-50%] whitespace-pre">2</p>
      </div>
    </div>
  );
}

function Container14() {
  return (
    <div className="absolute bg-[#d2a30b] content-stretch flex items-center justify-center left-[159.99px] rounded-[4.07082e+07px] size-[31.998px] top-[103.99px]" data-name="Container">
      <Text4 />
    </div>
  );
}

function Heading4() {
  return (
    <div className="absolute h-[31.998px] left-[68.68px] top-[151.99px] w-[214.641px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[32px] left-[107px] not-italic text-[#0d1421] text-[24px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">Achetez en un clic</p>
    </div>
  );
}

function Paragraph2() {
  return (
    <div className="absolute h-[95.994px] left-0 top-[195.99px] w-[351.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[176.31px] text-[16px] text-[rgba(13,20,33,0.7)] text-center top-[-0.79px] translate-x-[-50%] w-[343px]">{`Pas de compte requis. Cliquez sur "Acheter maintenant", renseignez votre email et réglez en toute sécurité via notre système de paiement sécurisé.`}</p>
    </div>
  );
}

function Container15() {
  return (
    <div className="absolute h-[291.983px] left-0 top-0 w-[351.998px]" data-name="Container">
      <Container13 />
      <Container14 />
      <Heading4 />
      <Paragraph2 />
    </div>
  );
}

function Container16() {
  return <div className="absolute bg-gradient-to-b from-[#d2a30b] h-[1.99px] left-[351.99px] to-[rgba(0,0,0,0)] top-[40px] w-[351.998px]" data-name="Container" />;
}

function Container17() {
  return (
    <div className="absolute h-[291.983px] left-[544.02px] top-[95.99px] w-[351.998px]" data-name="Container">
      <Container15 />
      <Container16 />
    </div>
  );
}

function Icon4() {
  return (
    <div className="relative shrink-0 size-[39.998px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 40 40">
        <g id="Icon">
          <path d="M19.9988 24.9985V4.9997" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
          <path d={svgPaths.p175a2e80} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
          <path d={svgPaths.p19a88f00} id="Vector_3" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="3.33313" />
        </g>
      </svg>
    </div>
  );
}

function Container18() {
  return (
    <div className="absolute bg-white content-stretch flex items-center justify-center left-[135.99px] p-[1.213px] rounded-[16px] size-[79.995px] top-0" data-name="Container">
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-100 border-solid inset-0 pointer-events-none rounded-[16px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)]" />
      <Icon4 />
    </div>
  );
}

function Text5() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[9.042px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[9.042px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[5px] text-[16px] text-center text-nowrap text-white top-[-0.79px] translate-x-[-50%] whitespace-pre">3</p>
      </div>
    </div>
  );
}

function Container19() {
  return (
    <div className="absolute bg-[#d2a30b] content-stretch flex items-center justify-center left-[159.99px] pl-0 pr-[0.019px] py-0 rounded-[4.07082e+07px] size-[31.998px] top-[103.99px]" data-name="Container">
      <Text5 />
    </div>
  );
}

function Heading5() {
  return (
    <div className="absolute h-[31.998px] left-[102.7px] top-[151.99px] w-[146.588px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[32px] left-[73.5px] not-italic text-[#0d1421] text-[24px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">Téléchargez</p>
    </div>
  );
}

function Paragraph3() {
  return (
    <div className="absolute h-[95.994px] left-0 top-[195.99px] w-[351.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[176.45px] text-[16px] text-[rgba(13,20,33,0.7)] text-center top-[-0.79px] translate-x-[-50%] w-[327px]">Accédez immédiatement à votre produit après le paiement. Recevez un email de confirmation avec un lien de téléchargement valable à vie.</p>
    </div>
  );
}

function Container20() {
  return (
    <div className="absolute h-[291.983px] left-[944.02px] top-[95.99px] w-[351.998px]" data-name="Container">
      <Container18 />
      <Container19 />
      <Heading5 />
      <Paragraph3 />
    </div>
  );
}

function Section1() {
  return (
    <div className="bg-white h-[483.971px] relative shrink-0 w-full" data-name="Section">
      <Container12 />
      <Container17 />
      <Container20 />
    </div>
  );
}

function Heading1() {
  return (
    <div className="content-stretch flex items-center justify-between relative shrink-0 w-full" data-name="Heading 2">
      <div className="font-['Merriweather:Regular',sans-serif] leading-[40px] not-italic relative shrink-0 text-[#0d1421] text-[36px] text-nowrap whitespace-pre">
        <p className="mb-0">{`Un processus d'achat`}</p>
        <p className="text-[#d2a30b]">ultra-simplifié</p>
      </div>
    </div>
  );
}

function Paragraph4() {
  return (
    <div className="h-[83.995px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[18px] text-[rgba(13,20,33,0.7)] top-[-0.57px] w-[527px]">Nous avons conçu notre plateforme pour éliminer toute friction entre vous et vos produits digitaux. Pas de création de compte fastidieuse, pas de panier compliqué.</p>
    </div>
  );
}

function Icon5() {
  return (
    <div className="absolute left-0 size-[23.999px] top-[4px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p29eafd00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p6c61c00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Heading3() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Heading 4">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Sans création de compte</p>
    </div>
  );
}

function Paragraph5() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[14px] text-[rgba(13,20,33,0.7)] text-nowrap top-[0.21px] whitespace-pre">Un simple email suffit pour finaliser votre achat</p>
    </div>
  );
}

function Container21() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[4px] h-[47.997px] items-start left-[36px] top-0 w-[330.653px]" data-name="Container">
      <Heading3 />
      <Paragraph5 />
    </div>
  );
}

function Container22() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-full" data-name="Container">
      <Icon5 />
      <Container21 />
    </div>
  );
}

function Icon6() {
  return (
    <div className="absolute left-0 size-[23.999px] top-[4px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p2e1ef140} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p29eafd00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Heading6() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Heading 4">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Accès instantané</p>
    </div>
  );
}

function Paragraph6() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[14px] text-[rgba(13,20,33,0.7)] text-nowrap top-[0.21px] whitespace-pre">Téléchargez votre produit immédiatement après le paiement</p>
    </div>
  );
}

function Container23() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[4px] h-[47.997px] items-start left-[36px] top-0 w-[428.392px]" data-name="Container">
      <Heading6 />
      <Paragraph6 />
    </div>
  );
}

function Container24() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-full" data-name="Container">
      <Icon6 />
      <Container23 />
    </div>
  );
}

function Icon7() {
  return (
    <div className="absolute left-0 size-[23.999px] top-[4px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p2303d100} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p38aa6800} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Heading7() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Heading 4">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Paiement 100% sécurisé</p>
    </div>
  );
}

function Paragraph7() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[14px] text-[rgba(13,20,33,0.7)] text-nowrap top-[0.21px] whitespace-pre">Vos données sont protégées par un cryptage de niveau bancaire</p>
    </div>
  );
}

function Container25() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[4px] h-[47.997px] items-start left-[36px] top-0 w-[450.438px]" data-name="Container">
      <Heading7 />
      <Paragraph7 />
    </div>
  );
}

function Container26() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-full" data-name="Container">
      <Icon7 />
      <Container25 />
    </div>
  );
}

function Container27() {
  return (
    <div className="content-stretch flex flex-col gap-[15.999px] h-[175.99px] items-start relative shrink-0 w-full" data-name="Container">
      <Container22 />
      <Container24 />
      <Container26 />
    </div>
  );
}

function Container28() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[23.999px] h-[395.976px] items-start left-[144.03px] top-[95.99px] w-[551.986px]" data-name="Container">
      <Heading1 />
      <Paragraph4 />
      <Container27 />
    </div>
  );
}

function ImageProcessusDachatSimplifie() {
  return (
    <div className="absolute h-[310.749px] left-[744.01px] rounded-[16px] shadow-[0px_25px_50px_-12px_rgba(0,0,0,0.25)] top-[138.61px] w-[552.005px]" data-name="Image (Processus d\'achat simplifié)">
      <div aria-hidden="true" className="absolute inset-0 pointer-events-none rounded-[16px]">
        <div className="absolute bg-[rgba(255,255,255,0)] inset-0 rounded-[16px]" />
        <img alt="" className="absolute max-w-none object-50%-50% object-cover rounded-[16px] size-full" src={imgImageProcessusDachatSimplifie} />
      </div>
    </div>
  );
}

function Section2() {
  return (
    <div className="bg-gray-50 h-[587.965px] relative shrink-0 w-full" data-name="Section">
      <Container28 />
      <ImageProcessusDachatSimplifie />
    </div>
  );
}

function Icon8() {
  return (
    <div className="absolute left-[14.79px] size-[31.998px] top-[14.79px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 32 32">
        <g id="Icon">
          <path d={svgPaths.p18cde400} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.66651" />
        </g>
      </svg>
    </div>
  );
}

function Container29() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-100 border-solid left-[543.99px] rounded-[16px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)] size-[63.996px] top-0" data-name="Container">
      <Icon8 />
    </div>
  );
}

function Text6() {
  return (
    <div className="absolute content-stretch flex h-[44.888px] items-start left-[682.04px] top-[-3.64px] w-[144.105px]" data-name="Text">
      <p className="font-['Merriweather:Regular',sans-serif] leading-[40px] not-italic relative shrink-0 text-[#d2a30b] text-[36px] text-center text-nowrap whitespace-pre">sécurité</p>
    </div>
  );
}

function Heading8() {
  return (
    <div className="absolute h-[39.998px] left-0 top-[87.99px] w-[1151.99px]" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[40px] left-[504.32px] not-italic text-[#0d1421] text-[36px] text-center text-nowrap top-[-1.64px] translate-x-[-50%] whitespace-pre">Vos achats en toute</p>
      <Text6 />
    </div>
  );
}

function Paragraph8() {
  return (
    <div className="absolute h-[27.998px] left-[239.99px] top-[143.99px] w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[336.12px] text-[18px] text-[rgba(13,20,33,0.7)] text-center text-nowrap top-[-0.57px] translate-x-[-50%] whitespace-pre">Nous prenons la sécurité de vos transactions très au sérieux</p>
    </div>
  );
}

function Container30() {
  return (
    <div className="h-[171.99px] relative shrink-0 w-full" data-name="Container">
      <Container29 />
      <Heading8 />
      <Paragraph8 />
    </div>
  );
}

function Icon9() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p2303d100} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p38aa6800} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Container31() {
  return (
    <div className="absolute bg-white content-stretch flex items-center justify-center left-[24px] p-[1.213px] rounded-[14px] size-[47.997px] top-[24px]" data-name="Container">
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-100 border-solid inset-0 pointer-events-none rounded-[14px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)]" />
      <Icon9 />
    </div>
  );
}

function Heading9() {
  return (
    <div className="absolute h-[27.998px] left-[24px] top-[88px] w-[312.228px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[#0d1421] text-[20px] text-nowrap top-[0.21px] whitespace-pre">Cryptage SSL</p>
    </div>
  );
}

function Paragraph9() {
  return (
    <div className="absolute h-[47.997px] left-[24px] top-[123.99px] w-[312.228px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-[rgba(13,20,33,0.7)] top-[-0.79px] w-[290px]">Toutes vos données sont cryptées et sécurisées lors de la transaction</p>
    </div>
  );
}

function Container32() {
  return (
    <div className="absolute bg-gray-50 border-[1.213px] border-gray-100 border-solid h-[198.415px] left-0 rounded-[14px] top-0 w-[362.651px]" data-name="Container">
      <Container31 />
      <Heading9 />
      <Paragraph9 />
    </div>
  );
}

function Icon10() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p14e2fd40} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d="M1.99988 9.9994H21.9987" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Container33() {
  return (
    <div className="absolute bg-white content-stretch flex items-center justify-center left-[24px] p-[1.213px] rounded-[14px] size-[47.997px] top-[24px]" data-name="Container">
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-100 border-solid inset-0 pointer-events-none rounded-[14px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)]" />
      <Icon10 />
    </div>
  );
}

function Heading10() {
  return (
    <div className="absolute h-[27.998px] left-[24px] top-[88px] w-[312.247px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[#0d1421] text-[20px] text-nowrap top-[0.21px] whitespace-pre">Paiements sécurisés</p>
    </div>
  );
}

function Paragraph10() {
  return (
    <div className="absolute h-[47.997px] left-[24px] top-[123.99px] w-[312.247px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-[rgba(13,20,33,0.7)] top-[-0.79px] w-[305px]">Nous ne stockons aucune information de carte bancaire sur nos serveurs</p>
    </div>
  );
}

function Container34() {
  return (
    <div className="absolute bg-gray-50 border-[1.213px] border-gray-100 border-solid h-[198.415px] left-[394.65px] rounded-[14px] top-0 w-[362.67px]" data-name="Container">
      <Container33 />
      <Heading10 />
      <Paragraph10 />
    </div>
  );
}

function Icon11() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p1301f080} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Container35() {
  return (
    <div className="absolute bg-white content-stretch flex items-center justify-center left-[24px] p-[1.213px] rounded-[14px] size-[47.997px] top-[24px]" data-name="Container">
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-100 border-solid inset-0 pointer-events-none rounded-[14px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)]" />
      <Icon11 />
    </div>
  );
}

function Heading11() {
  return (
    <div className="absolute h-[27.998px] left-[24px] top-[88px] w-[312.228px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[#0d1421] text-[20px] text-nowrap top-[0.21px] whitespace-pre">Support réactif</p>
    </div>
  );
}

function Paragraph11() {
  return (
    <div className="absolute h-[47.997px] left-[24px] top-[123.99px] w-[312.228px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-[rgba(13,20,33,0.7)] top-[-0.79px] w-[260px]">Une question ? Notre équipe est disponible pour vous aider</p>
    </div>
  );
}

function Container36() {
  return (
    <div className="absolute bg-gray-50 border-[1.213px] border-gray-100 border-solid h-[198.415px] left-[789.32px] rounded-[14px] top-0 w-[362.651px]" data-name="Container">
      <Container35 />
      <Heading11 />
      <Paragraph11 />
    </div>
  );
}

function Container37() {
  return (
    <div className="h-[198.415px] relative shrink-0 w-full" data-name="Container">
      <Container32 />
      <Container34 />
      <Container36 />
    </div>
  );
}

function Section3() {
  return (
    <div className="bg-white h-[610.39px] relative shrink-0 w-full" data-name="Section">
      <div className="size-full">
        <div className="content-stretch flex flex-col gap-[47.997px] h-[610.39px] items-start pb-0 pl-[144.029px] pr-[144.048px] pt-[95.994px] relative w-full">
          <Container30 />
          <Container37 />
        </div>
      </div>
    </div>
  );
}

function Heading12() {
  return (
    <div className="relative shrink-0 w-full" data-name="Heading 2">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-center px-[196px] py-0 relative w-full">
          <p className="font-['Merriweather:Regular',sans-serif] leading-[40px] not-italic relative shrink-0 text-[#0d1421] text-[36px] text-center text-nowrap whitespace-pre">Questions fréquentes</p>
        </div>
      </div>
    </div>
  );
}

function Paragraph12() {
  return (
    <div className="relative shrink-0 w-full" data-name="Paragraph">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-center px-[125px] py-0 relative w-full">
          <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] relative shrink-0 text-[18px] text-[rgba(13,20,33,0.7)] text-center text-nowrap whitespace-pre">{`Tout ce que vous devez savoir sur notre processus d'achat`}</p>
        </div>
      </div>
    </div>
  );
}

function Container38() {
  return (
    <div className="content-stretch flex flex-col gap-[15.999px] h-[83.995px] items-center relative shrink-0 w-full" data-name="Container">
      <Heading12 />
      <Paragraph12 />
    </div>
  );
}

function Text7() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[329.876px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[329.876px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Dois-je créer un compte pour acheter ?</p>
      </div>
    </div>
  );
}

function Icon12() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button() {
  return (
    <div className="content-stretch flex h-[64px] items-center justify-between relative shrink-0 w-full" data-name="Button">
      <Text7 />
      <Icon12 />
    </div>
  );
}

function Container39() {
  return (
    <div className="bg-white relative rounded-[14px] shrink-0 w-[1280px]" data-name="Container">
      <div className="content-stretch flex flex-col items-center overflow-clip pb-[22px] pt-px px-[24px] relative rounded-[inherit] w-[1280px]">
        <Button />
        <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] relative shrink-0 text-[16px] text-[rgba(13,20,33,0.7)] w-full">{`Non ! Notre système d'achat est conçu pour être ultra-simple. Il vous suffit de renseigner votre adresse email lors du paiement. Vous recevrez ensuite un lien de téléchargement directement par email.`}</p>
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text8() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[394.005px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[394.005px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Combien de temps ai-je accès à mes produits ?</p>
      </div>
    </div>
  );
}

function Icon13() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.1665V15.8332" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button1() {
  return (
    <div className="h-[63.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[63.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text8 />
          <Icon13 />
        </div>
      </div>
    </div>
  );
}

function Container40() {
  return (
    <div className="bg-white h-[67px] relative rounded-[14px] shrink-0 w-[1280px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[67px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1280px]">
        <Button1 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text9() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[368.357px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[368.357px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Quels moyens de paiement acceptez-vous ?</p>
      </div>
    </div>
  );
}

function Icon14() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.1665V15.8332" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button2() {
  return (
    <div className="h-[63.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[63.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text9 />
          <Icon14 />
        </div>
      </div>
    </div>
  );
}

function Container41() {
  return (
    <div className="bg-white h-[67px] relative rounded-[14px] shrink-0 w-[1279px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[67px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1279px]">
        <Button2 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text10() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[308.418px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[308.418px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Puis-je obtenir un remboursement ?</p>
      </div>
    </div>
  );
}

function Icon15() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.1665V15.8332" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button3() {
  return (
    <div className="h-[63.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[63.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text10 />
          <Icon15 />
        </div>
      </div>
    </div>
  );
}

function Container42() {
  return (
    <div className="bg-white h-[67px] relative rounded-[14px] shrink-0 w-[1280px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[67px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1280px]">
        <Button3 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text11() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[301.328px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[301.328px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Que se passe-t-il après mon achat ?</p>
      </div>
    </div>
  );
}

function Icon16() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.1665V15.8332" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button4() {
  return (
    <div className="h-[63.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[63.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text11 />
          <Icon16 />
        </div>
      </div>
    </div>
  );
}

function Container43() {
  return (
    <div className="bg-white h-[67px] relative rounded-[14px] shrink-0 w-[1279px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[67px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1279px]">
        <Button4 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text12() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[361.192px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[361.192px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#0d1421] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Les produits reçoivent-ils des mises à jour ?</p>
      </div>
    </div>
  );
}

function Icon17() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.1665V15.8332" id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button5() {
  return (
    <div className="h-[63.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[63.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text12 />
          <Icon17 />
        </div>
      </div>
    </div>
  );
}

function Container44() {
  return (
    <div className="bg-white h-[67px] relative rounded-[14px] shrink-0 w-[1279px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[67px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1279px]">
        <Button5 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function FaqAccordion() {
  return (
    <div className="content-stretch flex flex-col gap-[16px] items-start relative shrink-0 w-full" data-name="FAQAccordion">
      <Container39 />
      <Container40 />
      <Container41 />
      <Container42 />
      <Container43 />
      <Container44 />
    </div>
  );
}

function Section4() {
  return (
    <div className="bg-gray-50 h-[900.477px] relative shrink-0 w-full" data-name="Section">
      <div className="flex flex-col items-center size-full">
        <div className="content-stretch flex flex-col gap-[47.997px] h-[900.477px] items-center p-[80px] relative w-full">
          <Container38 />
          <FaqAccordion />
        </div>
      </div>
    </div>
  );
}

function Heading13() {
  return (
    <div className="content-stretch flex items-center justify-center px-[48px] py-0 relative shrink-0" data-name="Heading 2">
      <p className="font-['Merriweather:Regular',sans-serif] leading-[48px] not-italic relative shrink-0 text-[48px] text-center text-nowrap text-white whitespace-pre">Prêt à découvrir nos produits digitaux ?</p>
    </div>
  );
}

function Paragraph13() {
  return (
    <div className="h-[83.995px] relative shrink-0 w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[336.06px] text-[#d1d5dc] text-[20px] text-center top-[-0.79px] translate-x-[-50%] w-[638px]">Rejoignez les milliers de créateurs et entrepreneurs qui utilisent Digital Kappa pour gagner du temps et accéder à des ressources de qualité.</p>
    </div>
  );
}

function Icon18() {
  return (
    <div className="absolute left-[214.3px] size-[19.999px] top-[19.2px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16644 9.9994H15.8331" id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.p3e69bd00} id="Vector_2" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Link8() {
  return (
    <div className="bg-[#d2a30b] h-[58.423px] relative rounded-[10px] shrink-0 w-[266.297px]" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[58.423px] relative w-[266.297px]">
        <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[24px] left-[119.5px] text-[16px] text-center text-nowrap text-white top-[16.43px] translate-x-[-50%] whitespace-pre">Explorer le catalogue</p>
        <Icon18 />
      </div>
    </div>
  );
}

function Link9() {
  return (
    <div className="bg-white h-[58.423px] relative rounded-[10px] shrink-0 w-[180.103px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[#d2a30b] border-[1.213px] border-solid inset-0 pointer-events-none rounded-[10px]" />
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[58.423px] relative w-[180.103px]">
        <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[24px] left-[90.21px] text-[#d2a30b] text-[16px] text-center text-nowrap top-[16.43px] translate-x-[-50%] whitespace-pre">En savoir plus</p>
      </div>
    </div>
  );
}

function Container45() {
  return (
    <div className="content-stretch flex gap-[15.999px] h-[74.422px] items-start justify-center pb-0 pt-[15.999px] px-0 relative shrink-0" data-name="Container">
      <Link8 />
      <Link9 />
    </div>
  );
}

function Container46() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular','Noto_Sans_Symbols2:Regular',sans-serif] font-normal leading-[36px] relative shrink-0 text-[#d2a30b] text-[30px] text-center text-nowrap whitespace-pre">✓</p>
    </div>
  );
}

function Container47() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[16px] text-center text-nowrap text-white whitespace-pre">Téléchargement instantané</p>
    </div>
  );
}

function Container48() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-center text-nowrap whitespace-pre">Accès immédiat à vos produits</p>
    </div>
  );
}

function Container49() {
  return (
    <div className="content-stretch flex flex-col gap-[7.999px] h-[91.995px] items-center relative shrink-0 w-[223.987px]" data-name="Container">
      <Container46 />
      <Container47 />
      <Container48 />
    </div>
  );
}

function Container50() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular','Noto_Sans_Symbols2:Regular',sans-serif] font-normal leading-[36px] relative shrink-0 text-[#d2a30b] text-[30px] text-center text-nowrap whitespace-pre">✓</p>
    </div>
  );
}

function Container51() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0 w-[128px]" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[16px] text-center text-nowrap text-white whitespace-pre">Qualité garantie</p>
    </div>
  );
}

function Container52() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0 w-[146px]" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-center text-nowrap whitespace-pre">Sélection rigoureuse</p>
    </div>
  );
}

function Container53() {
  return (
    <div className="content-stretch flex flex-col gap-[7.999px] items-center relative shrink-0" data-name="Container">
      <Container50 />
      <Container51 />
      <Container52 />
    </div>
  );
}

function Container54() {
  return (
    <div className="content-stretch flex items-center justify-center px-[27px] py-0 relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular','Noto_Sans_Symbols2:Regular',sans-serif] font-normal leading-[36px] relative shrink-0 text-[#d2a30b] text-[30px] text-center text-nowrap whitespace-pre">✓</p>
    </div>
  );
}

function Container55() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[16px] text-center text-nowrap text-white whitespace-pre">Support réactif</p>
    </div>
  );
}

function Container56() {
  return (
    <div className="content-stretch flex items-center justify-center px-[36px] py-0 relative shrink-0 w-[153px]" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-center text-nowrap whitespace-pre">Assistance disponible</p>
    </div>
  );
}

function Container57() {
  return (
    <div className="content-stretch flex flex-col gap-[7.999px] items-center relative shrink-0" data-name="Container">
      <Container54 />
      <Container55 />
      <Container56 />
    </div>
  );
}

function Container58() {
  return (
    <div className="content-stretch flex items-center justify-between px-[16px] py-0 relative shrink-0 w-[767.998px]" data-name="Container">
      <Container49 />
      <Container53 />
      <Container57 />
    </div>
  );
}

function Container59() {
  return (
    <div className="basis-0 grow min-h-px min-w-px relative shrink-0" data-name="Container">
      <div className="flex flex-col items-center size-full">
        <div className="content-stretch flex flex-col gap-[32px] items-center px-[80px] py-0 relative w-full">
          <Heading13 />
          <Paragraph13 />
          <Container45 />
          <Container58 />
        </div>
      </div>
    </div>
  );
}

function Container60() {
  return <div className="absolute bg-[rgba(210,163,11,0.1)] blur-3xl filter left-[-175.96px] rounded-[4.07082e+07px] size-[383.996px] top-[109.2px]" data-name="Container" />;
}

function Container61() {
  return <div className="absolute bg-[rgba(210,163,11,0.1)] blur-3xl filter left-[1232.03px] rounded-[4.07082e+07px] size-[383.996px] top-[109.2px]" data-name="Container" />;
}

function Cta() {
  return (
    <div className="bg-gradient-to-b content-stretch flex from-[#1a1a1a] items-center justify-center overflow-clip px-0 py-[80px] relative shrink-0 to-[#1a1a1a] via-50% via-[#2a2a2a] w-full" data-name="CTA">
      <Container59 />
      <Container60 />
      <Container61 />
    </div>
  );
}

function Heading14() {
  return (
    <div className="h-[35.998px] relative shrink-0 w-[1280px]" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[36px] left-[448.45px] not-italic text-[#1a1a1a] text-[30px] text-center text-nowrap top-[-0.21px] translate-x-[-50%] whitespace-pre">Acheter des produits digitaux en toute simplicité</p>
    </div>
  );
}

function Paragraph14() {
  return (
    <div className="h-[77.967px] relative shrink-0 w-[895.985px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] left-0 text-[#364153] text-[16px] top-[-0.57px] w-[877px]">{`Notre marketplace Digital Kappa révolutionne l'achat de produits digitaux en proposant un processus d'achat ultra-simplifié inspiré de Gumroad. Sans création de compte fastidieuse ni panier compliqué, vous accédez directement à vos applications mobiles, ebooks et templates en quelques clics seulement.`}</p>
    </div>
  );
}

function Paragraph15() {
  return (
    <div className="h-[103.956px] relative shrink-0 w-[895.985px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] left-0 text-[#364153] text-[16px] top-[-0.57px] w-[887px]">{`Le système d'achat en un clic garantit une expérience utilisateur fluide et sécurisée. Chaque transaction est protégée par un cryptage SSL de niveau bancaire, et vos informations de paiement ne sont jamais stockées sur nos serveurs. Après le paiement, vous recevez instantanément un email de confirmation avec votre lien de téléchargement valable à vie.`}</p>
    </div>
  );
}

function Paragraph16() {
  return (
    <div className="h-[103.956px] relative shrink-0 w-[895.985px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] left-0 text-[#364153] text-[16px] top-[-0.57px] w-[883px]">{`Que vous recherchiez des applications mobiles professionnelles, des ebooks de formation ou des templates de design, notre catalogue propose une sélection rigoureuse de produits digitaux de qualité. Chaque produit est accompagné d'une description détaillée, de captures d'écran et de spécifications techniques pour vous aider à faire le bon choix.`}</p>
    </div>
  );
}

function Paragraph17() {
  return (
    <div className="h-[77.967px] relative shrink-0 w-[895.985px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] left-0 text-[#364153] text-[16px] top-[-0.57px] w-[873px]">{`Notre engagement : simplicité, accessibilité et qualité. Nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits, un support client réactif et un accès permanent à vos achats. Découvrez dès maintenant notre marketplace et profitez d'une expérience d'achat digital moderne et sans friction.`}</p>
    </div>
  );
}

function Container62() {
  return (
    <div className="content-stretch flex flex-col gap-[16px] items-center relative shrink-0" data-name="Container">
      <Paragraph14 />
      <Paragraph15 />
      <Paragraph16 />
      <Paragraph17 />
    </div>
  );
}

function SeoText() {
  return (
    <div className="bg-gray-50 content-stretch flex flex-col gap-[23.999px] items-center p-[80px] relative shrink-0" data-name="SEOText">
      <Heading14 />
      <Container62 />
    </div>
  );
}

function Calque2() {
  return (
    <div className="absolute bottom-[0.02%] contents left-0 right-[0.03%] top-0" data-name="Calque_1">
      <div className="absolute bottom-[0.02%] left-[64.82%] mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[-31.112px_0px] mask-size-[47.985px_31.99px] right-[0.03%] top-0" data-name="Vector" style={{ maskImage: `url('${imgVector}')` }}>
        <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 17 32">
          <path d={svgPaths.p2133f840} fill="var(--fill-0, #D2A30B)" id="Vector" />
        </svg>
      </div>
      <div className="absolute bottom-[0.02%] left-0 mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[0px] mask-size-[47.985px_31.99px] right-[40.39%] top-0" data-name="Vector_2" style={{ maskImage: `url('${imgVector}')` }}>
        <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 29 32">
          <path d={svgPaths.p28d89680} fill="var(--fill-0, #D2A30B)" id="Vector_2" />
        </svg>
      </div>
    </div>
  );
}

function ClipPathGroup1() {
  return (
    <div className="absolute bottom-[0.02%] contents left-0 right-[0.03%] top-0" data-name="Clip path group">
      <Calque2 />
    </div>
  );
}

function Icon19() {
  return (
    <div className="h-[31.998px] overflow-clip relative shrink-0 w-full" data-name="Icon">
      <ClipPathGroup1 />
    </div>
  );
}

function Calque3() {
  return (
    <div className="content-stretch flex flex-col h-[31.998px] items-start relative shrink-0 w-full" data-name="Calque">
      <Icon19 />
    </div>
  );
}

function Container63() {
  return (
    <div className="bg-white h-[39.998px] relative rounded-[4px] shrink-0 w-[55.997px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex flex-col h-[39.998px] items-start pb-0 pt-[4px] px-[4px] relative w-[55.997px]">
        <Calque3 />
      </div>
    </div>
  );
}

function Text13() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[136.106px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[136.106px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[20px] text-nowrap text-white top-[-0.79px] whitespace-pre">Digital Kappa</p>
      </div>
    </div>
  );
}

function Container64() {
  return (
    <div className="content-stretch flex gap-[11.999px] h-[39.998px] items-center relative shrink-0 w-full" data-name="Container">
      <Container63 />
      <Text13 />
    </div>
  );
}

function Paragraph18() {
  return (
    <div className="h-[95.994px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#99a1af] text-[16px] top-[-0.79px] w-[222px]">Des ressources numériques simples et de qualité pour créateurs, entrepreneurs et passionnés.</p>
    </div>
  );
}

function Icon20() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_1_528)" id="Icon">
          <path d={svgPaths.p11449600} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_1_528">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Link10() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-0 pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon20 />
    </div>
  );
}

function Icon21() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_1_634)" id="Icon">
          <path d={svgPaths.p1e25def1} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_1_634">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Link11() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-[56px] pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon21 />
    </div>
  );
}

function Icon22() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_1_575)" id="Icon">
          <path d={svgPaths.p37796500} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.p1dc07300} id="Vector_2" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.p2ac60b00} id="Vector_3" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_1_575">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Link12() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-[111.99px] pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon22 />
    </div>
  );
}

function Icon23() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_1_538)" id="Icon">
          <path d={svgPaths.p6e678c0} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.p33d84200} id="Vector_2" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M14.5825 5.41618H14.5908" id="Vector_3" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_1_538">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Link13() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-[167.99px] pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon23 />
    </div>
  );
}

function Container65() {
  return (
    <div className="h-[39.998px] relative shrink-0 w-full" data-name="Container">
      <Link10 />
      <Link11 />
      <Link12 />
      <Link13 />
    </div>
  );
}

function Container66() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[23.998px] h-[223.987px] items-start left-0 top-0 w-[268.003px]" data-name="Container">
      <Container64 />
      <Paragraph18 />
      <Container65 />
    </div>
  );
}

function Heading15() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[0.43px] whitespace-pre">Légal</p>
    </div>
  );
}

function Link14() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[71.446px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">À propos</p>
    </div>
  );
}

function ListItem() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link14 />
    </div>
  );
}

function Link15() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[34.785px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">CGV</p>
    </div>
  );
}

function ListItem1() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link15 />
    </div>
  );
}

function Link16() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[117.718px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Confidentialité</p>
    </div>
  );
}

function ListItem2() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link16 />
    </div>
  );
}

function List() {
  return (
    <div className="content-stretch flex flex-col gap-[11.999px] h-[95.994px] items-start relative shrink-0 w-full" data-name="List">
      <ListItem />
      <ListItem1 />
      <ListItem2 />
    </div>
  );
}

function Container67() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[15.999px] h-[223.987px] items-start left-[316px] top-0 w-[268.003px]" data-name="Container">
      <Heading15 />
      <List />
    </div>
  );
}

function Heading16() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[0.43px] whitespace-pre">Ressources</p>
    </div>
  );
}

function Link17() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[106.477px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">{`Centre d'aide`}</p>
    </div>
  );
}

function ListItem3() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link17 />
    </div>
  );
}

function Link18() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[68.299px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Tutoriels</p>
    </div>
  );
}

function ListItem4() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link18 />
    </div>
  );
}

function Link19() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[65.456px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Support</p>
    </div>
  );
}

function ListItem5() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link19 />
    </div>
  );
}

function List1() {
  return (
    <div className="content-stretch flex flex-col gap-[11.999px] h-[95.994px] items-start relative shrink-0 w-full" data-name="List">
      <ListItem3 />
      <ListItem4 />
      <ListItem5 />
    </div>
  );
}

function Container68() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[15.999px] h-[223.987px] items-start left-[632px] top-0 w-[268.003px]" data-name="Container">
      <Heading16 />
      <List1 />
    </div>
  );
}

function Heading17() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[0.43px] whitespace-pre">Contact</p>
    </div>
  );
}

function Icon24() {
  return (
    <div className="absolute left-0 size-[19.999px] top-[4px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_3_1024)" id="Icon">
          <path d={svgPaths.p3a018f00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.paebe640} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_3_1024">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container69() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-nowrap text-white top-[-0.79px] whitespace-pre">Email</p>
    </div>
  );
}

function Link20() {
  return (
    <div className="content-stretch flex h-[19.411px] items-start relative shrink-0 w-full" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">contact@digitalkappa.com</p>
    </div>
  );
}

function Container70() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[5.213px] h-[51.997px] items-start left-[32px] top-0 w-[217.314px]" data-name="Container">
      <Container69 />
      <Link20 />
    </div>
  );
}

function ListItem6() {
  return (
    <div className="h-[51.997px] relative shrink-0 w-full" data-name="List Item">
      <Icon24 />
      <Container70 />
    </div>
  );
}

function Icon25() {
  return (
    <div className="absolute left-0 size-[19.999px] top-[4px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_1_520)" id="Icon">
          <path d={svgPaths.p1b141e00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.p2ef29dc0} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_1_520">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container71() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-nowrap text-white top-[-0.79px] whitespace-pre">Localisation</p>
    </div>
  );
}

function Text14() {
  return (
    <div className="content-stretch flex h-[19.411px] items-start relative shrink-0 w-full" data-name="Text">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">En ligne, partout</p>
    </div>
  );
}

function Container72() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[5.213px] h-[51.997px] items-start left-[32px] top-0 w-[133.679px]" data-name="Container">
      <Container71 />
      <Text14 />
    </div>
  );
}

function ListItem7() {
  return (
    <div className="h-[51.997px] relative shrink-0 w-full" data-name="List Item">
      <Icon25 />
      <Container72 />
    </div>
  );
}

function List2() {
  return (
    <div className="content-stretch flex flex-col gap-[15.999px] h-[119.993px] items-start relative shrink-0 w-full" data-name="List">
      <ListItem6 />
      <ListItem7 />
    </div>
  );
}

function Container73() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[15.999px] h-[223.987px] items-start left-[948px] top-0 w-[268.003px]" data-name="Container">
      <Heading17 />
      <List2 />
    </div>
  );
}

function Container74() {
  return (
    <div className="h-[223.987px] relative shrink-0 w-full" data-name="Container">
      <Container66 />
      <Container67 />
      <Container68 />
      <Container73 />
    </div>
  );
}

function Paragraph19() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-[294.769px]" data-name="Paragraph">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[19.999px] relative w-[294.769px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#99a1af] text-[14px] text-nowrap top-[0.21px] whitespace-pre">© 2024 Digital Kappa. Tous droits réservés.</p>
      </div>
    </div>
  );
}

function Link21() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-[30.444px]" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[19.999px] relative w-[30.444px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-[15.5px] text-[#99a1af] text-[14px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">CGV</p>
      </div>
    </div>
  );
}

function Link22() {
  return (
    <div className="basis-0 grow h-[19.999px] min-h-px min-w-px relative shrink-0" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[19.999px] relative w-full">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-[95px] text-[#99a1af] text-[14px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">Politique de confidentialité</p>
      </div>
    </div>
  );
}

function Container75() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-[243.663px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex gap-[23.999px] h-[19.999px] items-start relative w-[243.663px]">
        <Link21 />
        <Link22 />
      </div>
    </div>
  );
}

function Container76() {
  return (
    <div className="content-stretch flex h-[19.999px] items-center justify-between relative shrink-0 w-full" data-name="Container">
      <Paragraph19 />
      <Container75 />
    </div>
  );
}

function Container77() {
  return (
    <div className="content-stretch flex flex-col h-[53.21px] items-start pb-0 pt-[33.211px] px-0 relative shrink-0 w-full" data-name="Container">
      <div aria-hidden="true" className="absolute border-[#364153] border-[1.213px_0px_0px] border-solid inset-0 pointer-events-none" />
      <Container76 />
    </div>
  );
}

function Footer() {
  return (
    <div className="bg-[#1a1a1a] h-[453.186px] relative shrink-0 w-full" data-name="Footer">
      <div className="size-full">
        <div className="content-stretch flex flex-col gap-[47.997px] h-[453.186px] items-start pb-0 pt-[63.996px] px-[112.031px] relative w-full">
          <Container74 />
          <Container77 />
        </div>
      </div>
    </div>
  );
}

function HowItWorksPage() {
  return (
    <div className="content-stretch flex flex-col items-center relative shrink-0 w-[1440.07px]" data-name="HowItWorksPage">
      <Section />
      <Section1 />
      <Section2 />
      <Section3 />
      <Section4 />
      <Cta />
      <SeoText />
      <Footer />
    </div>
  );
}

export default function CreerPageDaccueilModerne() {
  return (
    <div className="bg-white content-stretch flex flex-col items-start justify-center relative size-full" data-name="Créer page d\'accueil moderne">
      <Navigation />
      <HowItWorksPage />
    </div>
  );
}