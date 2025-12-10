import svgPaths from "./svg-m5wcxxm8qg";
import imgImageAppFitnessPremium from "figma:asset/3556d2c73fb65dd17ac0f57d3e344031227fc799.png";
import imgImageApplicationsMobiles from "figma:asset/8648536c0883a5947331ba9fbc4ef59822ac0c6e.png";
import imgImageEbooks from "figma:asset/e9f5d71690e44cb1e8e15349f857456a26f7eac4.png";
import imgImageTemplates from "figma:asset/02c98fb502c81b1a6d739238221bdd53dc3bc55b.png";
import imgImageDashboardAnalyticsPro from "figma:asset/c5652365ed550b5b7a17575051dd00eca3c75c14.png";
import imgImageGuideDuDeveloppeurModerne from "figma:asset/744f2d0dba28454e218a40daea3278bcd1cbb92a.png";
import imgImagePack50TemplatesEmailMarketing from "figma:asset/3c212020814f43aad7053ec2a853c665b8b72adc.png";
import imgImageECommerceAppStarterKit from "figma:asset/dfff3871f3ea26a1d2384c72d4a3c9f00ce62fdf.png";
import imgImageDigitalKappa from "figma:asset/53b398ce239e8e647f11ed2aaa9f513d956a813f.png";
import { imgVector } from "./svg-ie8rj";

function Clip() {
  return (
    <div className="absolute bg-gray-50 content-stretch flex flex-col items-start left-0 overflow-clip size-[234.375px] top-0" data-name="Container">
      <div className="h-[234.375px] relative shrink-0 w-full" data-name="Image (App Fitness Premium)">
        <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageAppFitnessPremium} />
      </div>
    </div>
  );
}

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
    <div className="absolute h-[19.999px] left-[32px] top-[8px] w-[359.334px]" data-name="Text">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#0d1421] text-[14px] text-nowrap top-[0.21px] whitespace-pre">Lancement officiel - Nouveaux produits disponibles</p>
    </div>
  );
}

function Container5() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-100 border-solid h-[38.424px] left-0 rounded-[4.07082e+07px] shadow-[0px_1px_3px_0px_rgba(0,0,0,0.1),0px_1px_2px_-1px_rgba(0,0,0,0.1)] top-0 w-[409.758px]" data-name="Container">
      <Text1 />
      <Text2 />
    </div>
  );
}

function Text3() {
  return (
    <div className="absolute content-stretch flex h-[75.218px] items-start left-0 top-[73.78px] w-[520.197px]" data-name="Text">
      <p className="font-['Merriweather:Regular',sans-serif] leading-[75px] not-italic relative shrink-0 text-[#d2a30b] text-[60px] text-nowrap whitespace-pre">produits digitaux</p>
    </div>
  );
}

function Heading() {
  return (
    <div className="absolute h-[149.982px] left-0 top-[70.42px] w-[589.993px]" data-name="Heading 1">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[75px] left-0 not-italic text-[#0d1421] text-[60px] text-nowrap top-[-1.21px] whitespace-pre">Marketplace de</p>
      <Text3 />
    </div>
  );
}

function Paragraph() {
  return (
    <div className="absolute h-[116.998px] left-0 top-[244.4px] w-[589.993px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[29.25px] left-0 text-[18px] text-[rgba(13,20,33,0.7)] top-[-0.36px] w-[580px]">Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.</p>
    </div>
  );
}

function Button() {
  return (
    <div className="bg-[#d2a30b] h-[54.404px] relative rounded-[10px] shrink-0 w-[233.844px]" data-name="Button">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[54.404px] relative w-[233.844px]">
        <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[24px] left-[117px] text-[16px] text-center text-nowrap text-white top-[14.42px] translate-x-[-50%] whitespace-pre">Explorer les produits</p>
      </div>
    </div>
  );
}

function Button1() {
  return (
    <div className="bg-white h-[54.404px] relative rounded-[10px] shrink-0 w-full" data-name="Button">
      <div aria-hidden="true" className="absolute border-[#d2a30b] border-[1.213px] border-solid inset-0 pointer-events-none rounded-[10px]" />
      <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[24px] left-[120.71px] text-[#d2a30b] text-[16px] text-center text-nowrap top-[14.42px] translate-x-[-50%] whitespace-pre">Comment ça marche</p>
    </div>
  );
}

function Link8() {
  return (
    <div className="h-[54.404px] relative shrink-0 w-[240.308px]" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex flex-col h-[54.404px] items-start relative w-[240.308px]">
        <Button1 />
      </div>
    </div>
  );
}

function Container6() {
  return (
    <div className="absolute content-stretch flex gap-[11.999px] h-[54.404px] items-start left-0 top-[401.4px] w-[589.993px]" data-name="Container">
      <Button />
      <Link8 />
    </div>
  );
}

function Container7() {
  return (
    <div className="absolute h-[503.799px] left-0 top-0 w-[589.993px]" data-name="Container">
      <Container5 />
      <Heading />
      <Paragraph />
      <Container6 />
    </div>
  );
}

function ImageApplicationsMobiles() {
  return (
    <div className="absolute h-[194.984px] left-0 top-0 w-[471.555px]" data-name="Image (Applications mobiles)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageApplicationsMobiles} />
    </div>
  );
}

function Container8() {
  return <div className="absolute bg-gradient-to-b from-[rgba(13,20,33,0.6)] h-[194.984px] left-0 to-[rgba(0,0,0,0)] top-0 via-20% via-[rgba(13,20,33,0.15)] w-[471.555px]" data-name="Container" />;
}

function Text4() {
  return (
    <div className="content-stretch flex h-[14.558px] items-start relative shrink-0 w-full" data-name="Text">
      <p className="font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[16px] relative shrink-0 text-[12px] text-nowrap text-white whitespace-pre">Populaire</p>
    </div>
  );
}

function Container9() {
  return (
    <div className="absolute bg-[#d2a30b] content-stretch flex flex-col h-[31.998px] items-start left-[16px] pb-0 pt-[8.853px] px-[8px] rounded-[10px] top-[17.99px] w-[75.332px]" data-name="Container">
      <Text4 />
    </div>
  );
}

function Heading2() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[24px] left-0 not-italic text-[16px] text-nowrap text-white top-[-0.79px] whitespace-pre">Applications mobiles</p>
    </div>
  );
}

function Paragraph1() {
  return (
    <div className="content-stretch flex h-[15.999px] items-start relative shrink-0 w-full" data-name="Paragraph">
      <p className="basis-0 font-['Montserrat:Regular',sans-serif] font-normal grow leading-[16px] min-h-px min-w-px relative shrink-0 text-[12px] text-[rgba(255,255,255,0.7)]">{`Applications prêtes à l'emploi`}</p>
    </div>
  );
}

function Container10() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[4px] h-[43.997px] items-start left-[16px] top-[134.99px] w-[439.557px]" data-name="Container">
      <Heading2 />
      <Paragraph1 />
    </div>
  );
}

function Container11() {
  return (
    <div className="h-[194.984px] relative shrink-0 w-full" data-name="Container">
      <ImageApplicationsMobiles />
      <Container8 />
      <Container9 />
      <Container10 />
    </div>
  );
}

function Container12() {
  return (
    <div className="absolute bg-white h-[198.983px] left-0 rounded-[16px] top-0 w-[473.981px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[198.983px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[473.981px]">
        <Container11 />
      </div>
      <div aria-hidden="true" className="absolute border-[#f0f2f5] border-[1.213px] border-solid inset-0 pointer-events-none rounded-[16px] shadow-[0px_20px_25px_-5px_rgba(0,0,0,0.1),0px_8px_10px_-6px_rgba(0,0,0,0.1)]" />
    </div>
  );
}

function ImageEbooks() {
  return (
    <div className="absolute h-[237.559px] left-0 top-0 w-[224.555px]" data-name="Image (Ebooks)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageEbooks} />
    </div>
  );
}

function Container13() {
  return <div className="absolute bg-gradient-to-b from-[rgba(13,20,33,0.6)] h-[237.559px] left-0 to-[rgba(0,0,0,0)] top-0 via-20% via-[rgba(13,20,33,0.15)] w-[224.555px]" data-name="Container" />;
}

function Heading3() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-full" data-name="Heading 4">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[20px] left-0 not-italic text-[14px] text-nowrap text-white top-[0.21px] whitespace-pre">Ebooks</p>
    </div>
  );
}

function Paragraph2() {
  return (
    <div className="content-stretch flex h-[15.999px] items-start relative shrink-0 w-full" data-name="Paragraph">
      <p className="basis-0 font-['Montserrat:Regular',sans-serif] font-normal grow leading-[16px] min-h-px min-w-px relative shrink-0 text-[12px] text-[rgba(255,255,255,0.7)]">{`Guides & formations`}</p>
    </div>
  );
}

function Container14() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[4px] h-[39.998px] items-start left-[12px] top-[185.56px] w-[200.557px]" data-name="Container">
      <Heading3 />
      <Paragraph2 />
    </div>
  );
}

function Container15() {
  return (
    <div className="h-[237.559px] relative shrink-0 w-full" data-name="Container">
      <ImageEbooks />
      <Container13 />
      <Container14 />
    </div>
  );
}

function Container16() {
  return (
    <div className="absolute bg-white h-[239.986px] left-0 rounded-[16px] top-[210px] w-[226.982px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[239.986px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[226.982px]">
        <Container15 />
      </div>
      <div aria-hidden="true" className="absolute border-[#f0f2f5] border-[1.213px] border-solid inset-0 pointer-events-none rounded-[16px] shadow-[0px_20px_25px_-5px_rgba(0,0,0,0.1),0px_8px_10px_-6px_rgba(0,0,0,0.1)]" />
    </div>
  );
}

function ImageTemplates() {
  return (
    <div className="absolute h-[237.559px] left-0 top-0 w-[224.555px]" data-name="Image (Templates)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageTemplates} />
    </div>
  );
}

function Container17() {
  return <div className="absolute bg-gradient-to-b from-[rgba(13,20,33,0.6)] h-[237.559px] left-0 to-[rgba(0,0,0,0)] top-0 via-20% via-[rgba(13,20,33,0.15)] w-[224.555px]" data-name="Container" />;
}

function Heading4() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-full" data-name="Heading 4">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[20px] left-0 not-italic text-[14px] text-nowrap text-white top-[0.21px] whitespace-pre">Templates</p>
    </div>
  );
}

function Paragraph3() {
  return (
    <div className="content-stretch flex h-[15.999px] items-start relative shrink-0 w-full" data-name="Paragraph">
      <p className="basis-0 font-['Montserrat:Regular',sans-serif] font-normal grow leading-[16px] min-h-px min-w-px relative shrink-0 text-[12px] text-[rgba(255,255,255,0.7)]">{`Design & code`}</p>
    </div>
  );
}

function Container18() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[4px] h-[39.998px] items-start left-[12px] top-[185.56px] w-[200.557px]" data-name="Container">
      <Heading4 />
      <Paragraph3 />
    </div>
  );
}

function Container19() {
  return (
    <div className="h-[237.559px] relative shrink-0 w-full" data-name="Container">
      <ImageTemplates />
      <Container17 />
      <Container18 />
    </div>
  );
}

function Container20() {
  return (
    <div className="absolute bg-white h-[239.986px] left-[247px] rounded-[16px] top-[210px] w-[226.982px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[239.986px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[226.982px]">
        <Container19 />
      </div>
      <div aria-hidden="true" className="absolute border-[#f0f2f5] border-[1.213px] border-solid inset-0 pointer-events-none rounded-[16px] shadow-[0px_20px_25px_-5px_rgba(0,0,0,0.1),0px_8px_10px_-6px_rgba(0,0,0,0.1)]" />
    </div>
  );
}

function Container21() {
  return (
    <div className="absolute h-[449.983px] left-[653.99px] top-0 w-[626.01px]" data-name="Container">
      <Container12 />
      <Container16 />
      <Container20 />
    </div>
  );
}

function Container22() {
  return (
    <div className="h-[503.799px] relative shrink-0 w-[1280px]" data-name="Container">
      <Container7 />
      <Container21 />
    </div>
  );
}

function Container23() {
  return <div className="absolute bg-[rgba(210,163,11,0.1)] blur-3xl filter left-[560.03px] rounded-[4.07082e+07px] size-[320px] top-0" data-name="Container" />;
}

function HeroFigma() {
  return (
    <div className="bg-gray-50 relative shrink-0 w-full" data-name="HeroFigma">
      <div className="flex flex-col items-center overflow-clip rounded-[inherit] size-full">
        <div className="content-stretch flex flex-col items-center px-[80px] py-[24px] relative w-full">
          <Container22 />
          <Container23 />
        </div>
      </div>
    </div>
  );
}

function Icon2() {
  return (
    <div className="absolute left-[12px] size-[23.999px] top-[12px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p29eafd00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p8568600} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.pbb34e00} id="Vector_3" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Container24() {
  return (
    <div className="absolute bg-[rgba(210,163,11,0.1)] left-[123.99px] rounded-[4.07082e+07px] size-[47.997px] top-0" data-name="Container">
      <Icon2 />
    </div>
  );
}

function Container25() {
  return (
    <div className="absolute h-[27.998px] left-0 top-[64px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[148.22px] text-[#1a1a1a] text-[18px] text-center text-nowrap top-[-0.57px] translate-x-[-50%] whitespace-pre">Simplicité</p>
    </div>
  );
}

function Container26() {
  return (
    <div className="absolute h-[45.495px] left-0 top-[99.99px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[148.03px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[261px]">Interface intuitive pour trouver rapidement ce dont vous avez besoin</p>
    </div>
  );
}

function Container27() {
  return (
    <div className="absolute h-[145.489px] left-0 top-0 w-[296.001px]" data-name="Container">
      <Container24 />
      <Container25 />
      <Container26 />
    </div>
  );
}

function Icon3() {
  return (
    <div className="absolute left-[12px] size-[23.999px] top-[12px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g clipPath="url(#clip0_1_598)" id="Icon">
          <path d={svgPaths.p36ab380} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
        <defs>
          <clipPath id="clip0_1_598">
            <rect fill="white" height="23.9986" width="23.9986" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container28() {
  return (
    <div className="absolute bg-[rgba(210,163,11,0.1)] left-[123.99px] rounded-[4.07082e+07px] size-[47.997px] top-0" data-name="Container">
      <Icon3 />
    </div>
  );
}

function Container29() {
  return (
    <div className="absolute h-[27.998px] left-0 top-[64px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[148.28px] text-[#1a1a1a] text-[18px] text-center text-nowrap top-[-0.57px] translate-x-[-50%] whitespace-pre">Fiabilité</p>
    </div>
  );
}

function Container30() {
  return (
    <div className="absolute h-[45.495px] left-0 top-[99.99px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[148.48px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[220px]">Produits vérifiés et transactions sécurisées</p>
    </div>
  );
}

function Container31() {
  return (
    <div className="absolute h-[145.489px] left-[328px] top-0 w-[296.001px]" data-name="Container">
      <Container28 />
      <Container29 />
      <Container30 />
    </div>
  );
}

function Icon4() {
  return (
    <div className="absolute left-[12px] size-[23.999px] top-[12px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g clipPath="url(#clip0_1_584)" id="Icon">
          <path d={svgPaths.p23aa1a00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
        <defs>
          <clipPath id="clip0_1_584">
            <rect fill="white" height="23.9986" width="23.9986" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container32() {
  return (
    <div className="absolute bg-[rgba(210,163,11,0.1)] left-[123.99px] rounded-[4.07082e+07px] size-[47.997px] top-0" data-name="Container">
      <Icon4 />
    </div>
  );
}

function Container33() {
  return (
    <div className="absolute h-[27.998px] left-0 top-[64px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[148.27px] text-[#1a1a1a] text-[18px] text-center text-nowrap top-[-0.57px] translate-x-[-50%] whitespace-pre">Rapidité</p>
    </div>
  );
}

function Container34() {
  return (
    <div className="absolute h-[45.495px] left-0 top-[99.99px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[148.39px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[244px]">Accès instantané à vos achats sans délai</p>
    </div>
  );
}

function Container35() {
  return (
    <div className="absolute h-[145.489px] left-[656px] top-0 w-[296.001px]" data-name="Container">
      <Container32 />
      <Container33 />
      <Container34 />
    </div>
  );
}

function Icon5() {
  return (
    <div className="absolute left-[12px] size-[23.999px] top-[12px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p1c4bff80} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Container36() {
  return (
    <div className="absolute bg-[rgba(210,163,11,0.1)] left-[123.99px] rounded-[4.07082e+07px] size-[47.997px] top-0" data-name="Container">
      <Icon5 />
    </div>
  );
}

function Container37() {
  return (
    <div className="absolute h-[27.998px] left-0 top-[64px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[148.33px] text-[#1a1a1a] text-[18px] text-center text-nowrap top-[-0.57px] translate-x-[-50%] whitespace-pre">Qualité</p>
    </div>
  );
}

function Container38() {
  return (
    <div className="absolute h-[45.495px] left-0 top-[99.99px] w-[296.001px]" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[148.34px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[229px]">Sélection rigoureuse de produits premium</p>
    </div>
  );
}

function Container39() {
  return (
    <div className="absolute h-[145.489px] left-[984px] top-0 w-[296.001px]" data-name="Container">
      <Container36 />
      <Container37 />
      <Container38 />
    </div>
  );
}

function Container40() {
  return (
    <div className="h-[145.489px] relative shrink-0 w-full" data-name="Container">
      <Container27 />
      <Container31 />
      <Container35 />
      <Container39 />
    </div>
  );
}

function SocialProof() {
  return (
    <div className="bg-[#fffffe] h-[275.908px] relative shrink-0 w-full" data-name="SocialProof">
      <div aria-hidden="true" className="absolute border-[1.213px_0px] border-gray-100 border-solid inset-0 pointer-events-none" />
      <div className="size-full">
        <div className="content-stretch flex flex-col h-[275.908px] items-start pb-[1.213px] pt-[65.209px] px-[80.033px] relative w-full">
          <Container40 />
        </div>
      </div>
    </div>
  );
}

function Heading1() {
  return (
    <div className="h-[39.998px] relative shrink-0 w-[1280px]" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[40px] left-[640.93px] not-italic text-[#1a1a1a] text-[36px] text-center text-nowrap top-[-1.64px] translate-x-[-50%] whitespace-pre">Découvrez nos produits</p>
    </div>
  );
}

function Paragraph4() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[336.18px] text-[#4a5565] text-[16px] text-center top-[-0.79px] translate-x-[-50%] w-[597px]">Découvrez notre sélection de départ : applications, templates et ebooks de qualité professionnelle pour vos projets</p>
    </div>
  );
}

function Container41() {
  return (
    <div className="content-stretch flex flex-col gap-[16px] items-center relative shrink-0 w-full" data-name="Container">
      <Heading1 />
      <Paragraph4 />
    </div>
  );
}

function Heading5() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[194.377px]" data-name="Heading 3">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[194.377px]">
        <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[24px] left-0 not-italic text-[#1a1a1a] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">App Fitness Premium</p>
      </div>
    </div>
  );
}

function Text5() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[40.301px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[40.301px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[#1a1a1a] text-[18px] text-nowrap top-[-0.57px] whitespace-pre">59 €</p>
      </div>
    </div>
  );
}

function Icon6() {
  return (
    <div className="absolute left-[104.73px] size-[13.99px] top-[8.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 14 14">
        <g id="Icon">
          <path d="M2.91452 6.99484H11.0752" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
          <path d={svgPaths.p33f65600} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
        </g>
      </svg>
    </div>
  );
}

function Container42() {
  return (
    <div className="h-[31.979px] relative shrink-0 w-[194.377px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[31.979px] relative w-[194.377px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[6.2px] whitespace-pre">Voir le produit</p>
        <Icon6 />
      </div>
    </div>
  );
}

function Container43() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[11.999px] h-[171.971px] items-start left-0 pb-0 pl-[19.999px] pr-0 pt-[19.999px] top-[234.37px] w-[234.375px]" data-name="Container">
      <Heading5 />
      <Text5 />
      <Container42 />
    </div>
  );
}

function Link9() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-200 border-solid h-[408.772px] left-0 overflow-clip rounded-[14px] shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] top-0 w-[236.801px]" data-name="Link">
      <Container43 />
      <Clip />
    </div>
  );
}

function Heading6() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[194.377px]" data-name="Heading 3">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[47.997px] relative w-[194.377px]">
        <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[24px] left-0 not-italic text-[#1a1a1a] text-[16px] top-[-0.79px] w-[165px]">Dashboard Analytics Pro</p>
      </div>
    </div>
  );
}

function Text6() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[40.301px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[40.301px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[#1a1a1a] text-[18px] text-nowrap top-[-0.57px] whitespace-pre">59 €</p>
      </div>
    </div>
  );
}

function Icon7() {
  return (
    <div className="absolute left-[104.73px] size-[13.99px] top-[8.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 14 14">
        <g id="Icon">
          <path d="M2.91451 6.99484H11.0752" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
          <path d={svgPaths.p33f65600} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
        </g>
      </svg>
    </div>
  );
}

function Container44() {
  return (
    <div className="h-[31.979px] relative shrink-0 w-[194.377px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[31.979px] relative w-[194.377px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[6.2px] whitespace-pre">Voir le produit</p>
        <Icon7 />
      </div>
    </div>
  );
}

function Container45() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[11.999px] h-[171.971px] items-start left-0 pb-0 pl-[19.999px] pr-0 pt-[19.999px] top-[234.37px] w-[234.375px]" data-name="Container">
      <Heading6 />
      <Text6 />
      <Container44 />
    </div>
  );
}

function ImageDashboardAnalyticsPro() {
  return (
    <div className="h-[234.375px] relative shrink-0 w-full" data-name="Image (Dashboard Analytics Pro)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageDashboardAnalyticsPro} />
    </div>
  );
}

function Container46() {
  return (
    <div className="absolute bg-gray-50 content-stretch flex flex-col items-start left-0 overflow-clip size-[234.375px] top-0" data-name="Container">
      <ImageDashboardAnalyticsPro />
    </div>
  );
}

function Link10() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-200 border-solid h-[408.772px] left-[260.8px] overflow-clip rounded-[14px] shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] top-0 w-[236.801px]" data-name="Link">
      <Container45 />
      <Container46 />
    </div>
  );
}

function Heading7() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[194.377px]" data-name="Heading 3">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[47.997px] relative w-[194.377px]">
        <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[24px] left-0 not-italic text-[#1a1a1a] text-[16px] top-[-0.79px] w-[176px]">Guide du Développeur Moderne</p>
      </div>
    </div>
  );
}

function Text7() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[40.301px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[40.301px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[#1a1a1a] text-[18px] text-nowrap top-[-0.57px] whitespace-pre">59 €</p>
      </div>
    </div>
  );
}

function Icon8() {
  return (
    <div className="absolute left-[104.73px] size-[13.99px] top-[8.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 14 14">
        <g id="Icon">
          <path d="M2.91454 6.99484H11.0752" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
          <path d={svgPaths.p33f65600} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
        </g>
      </svg>
    </div>
  );
}

function Container47() {
  return (
    <div className="h-[31.979px] relative shrink-0 w-[194.377px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[31.979px] relative w-[194.377px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[6.2px] whitespace-pre">Voir le produit</p>
        <Icon8 />
      </div>
    </div>
  );
}

function Container48() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[11.999px] h-[171.971px] items-start left-0 pb-0 pl-[19.999px] pr-0 pt-[19.999px] top-[234.37px] w-[234.375px]" data-name="Container">
      <Heading7 />
      <Text7 />
      <Container47 />
    </div>
  );
}

function ImageGuideDuDeveloppeurModerne() {
  return (
    <div className="h-[234.375px] relative shrink-0 w-full" data-name="Image (Guide du Développeur Moderne)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageGuideDuDeveloppeurModerne} />
    </div>
  );
}

function Container49() {
  return (
    <div className="absolute bg-gray-50 content-stretch flex flex-col items-start left-0 overflow-clip size-[234.375px] top-0" data-name="Container">
      <ImageGuideDuDeveloppeurModerne />
    </div>
  );
}

function Link11() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-200 border-solid h-[408.772px] left-[521.6px] overflow-clip rounded-[14px] shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] top-0 w-[236.801px]" data-name="Link">
      <Container48 />
      <Container49 />
    </div>
  );
}

function Heading8() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[194.377px]" data-name="Heading 3">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[47.997px] relative w-[194.377px]">
        <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[24px] left-0 not-italic text-[#1a1a1a] text-[16px] top-[-0.79px] w-[151px]">Pack 50 Templates Email Marketing</p>
      </div>
    </div>
  );
}

function Text8() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[40.301px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[40.301px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[#1a1a1a] text-[18px] text-nowrap top-[-0.57px] whitespace-pre">59 €</p>
      </div>
    </div>
  );
}

function Icon9() {
  return (
    <div className="absolute left-[104.73px] size-[13.99px] top-[8.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 14 14">
        <g id="Icon">
          <path d="M2.91454 6.99484H11.0752" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
          <path d={svgPaths.p33f65600} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
        </g>
      </svg>
    </div>
  );
}

function Container50() {
  return (
    <div className="h-[31.979px] relative shrink-0 w-[194.377px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[31.979px] relative w-[194.377px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[6.2px] whitespace-pre">Voir le produit</p>
        <Icon9 />
      </div>
    </div>
  );
}

function Container51() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[11.999px] h-[171.971px] items-start left-0 pb-0 pl-[19.999px] pr-0 pt-[19.999px] top-[234.37px] w-[234.375px]" data-name="Container">
      <Heading8 />
      <Text8 />
      <Container50 />
    </div>
  );
}

function ImagePack50TemplatesEmailMarketing() {
  return (
    <div className="h-[234.375px] relative shrink-0 w-full" data-name="Image (Pack 50 Templates Email Marketing)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImagePack50TemplatesEmailMarketing} />
    </div>
  );
}

function Container52() {
  return (
    <div className="absolute bg-gray-50 content-stretch flex flex-col items-start left-0 overflow-clip size-[234.375px] top-0" data-name="Container">
      <ImagePack50TemplatesEmailMarketing />
    </div>
  );
}

function Link12() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-200 border-solid h-[408.772px] left-[782.4px] overflow-clip rounded-[14px] shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] top-0 w-[236.801px]" data-name="Link">
      <Container51 />
      <Container52 />
    </div>
  );
}

function Heading9() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[194.377px]" data-name="Heading 3">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[47.997px] relative w-[194.377px]">
        <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[24px] left-0 not-italic text-[#1a1a1a] text-[16px] top-[-0.79px] w-[141px]">E-commerce App Starter Kit</p>
      </div>
    </div>
  );
}

function Text9() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[40.301px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[40.301px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[#1a1a1a] text-[18px] text-nowrap top-[-0.57px] whitespace-pre">59 €</p>
      </div>
    </div>
  );
}

function Icon10() {
  return (
    <div className="absolute left-[104.73px] size-[13.99px] top-[8.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 14 14">
        <g id="Icon">
          <path d="M2.91448 6.99484H11.0751" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
          <path d={svgPaths.p33f65600} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.16581" />
        </g>
      </svg>
    </div>
  );
}

function Container53() {
  return (
    <div className="h-[31.979px] relative shrink-0 w-[194.377px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[31.979px] relative w-[194.377px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[6.2px] whitespace-pre">Voir le produit</p>
        <Icon10 />
      </div>
    </div>
  );
}

function Container54() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[11.999px] h-[171.971px] items-start left-0 pb-0 pl-[19.999px] pr-0 pt-[19.999px] top-[234.37px] w-[234.375px]" data-name="Container">
      <Heading9 />
      <Text9 />
      <Container53 />
    </div>
  );
}

function ImageECommerceAppStarterKit() {
  return (
    <div className="h-[234.375px] relative shrink-0 w-full" data-name="Image (E-commerce App Starter Kit)">
      <img alt="" className="absolute inset-0 max-w-none object-50%-50% object-cover pointer-events-none size-full" src={imgImageECommerceAppStarterKit} />
    </div>
  );
}

function Container55() {
  return (
    <div className="absolute bg-gray-50 content-stretch flex flex-col items-start left-0 overflow-clip size-[234.375px] top-0" data-name="Container">
      <ImageECommerceAppStarterKit />
    </div>
  );
}

function Link13() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-200 border-solid h-[408.772px] left-[1043.2px] overflow-clip rounded-[14px] shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] top-0 w-[236.801px]" data-name="Link">
      <Container54 />
      <Container55 />
    </div>
  );
}

function Container56() {
  return (
    <div className="h-[408.772px] relative shrink-0 w-full" data-name="Container">
      <Link9 />
      <Link10 />
      <Link11 />
      <Link12 />
      <Link13 />
    </div>
  );
}

function Container57() {
  return (
    <div className="content-stretch flex flex-col gap-[47.997px] h-[596.761px] items-start relative shrink-0 w-full" data-name="Container">
      <Container41 />
      <Container56 />
    </div>
  );
}

function Portfolio() {
  return (
    <div className="bg-gradient-to-b from-[#f9fafb] relative shrink-0 to-[#ffffff] w-full" data-name="Portfolio">
      <div className="size-full">
        <div className="content-stretch flex flex-col items-start px-[80.033px] py-[80px] relative w-full">
          <Container57 />
        </div>
      </div>
    </div>
  );
}

function Heading10() {
  return (
    <div className="h-[39.998px] relative shrink-0 w-[1280px]" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[40px] left-[639.62px] not-italic text-[#1a1a1a] text-[36px] text-center text-nowrap top-[-1.64px] translate-x-[-50%] whitespace-pre">Catégories de produits</p>
    </div>
  );
}

function Paragraph5() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[336.17px] text-[#4a5565] text-[16px] text-center top-[-0.79px] translate-x-[-50%] w-[611px]">Explorez notre sélection organisée de produits digitaux dans trois catégories principales</p>
    </div>
  );
}

function Container58() {
  return (
    <div className="content-stretch flex flex-col gap-[16px] items-center relative shrink-0 w-full" data-name="Container">
      <Heading10 />
      <Paragraph5 />
    </div>
  );
}

function Icon11() {
  return (
    <div className="absolute left-[17.99px] size-[27.998px] top-[17.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 28 28">
        <g id="Icon">
          <path d={svgPaths.p8ca0c00} id="Vector" stroke="var(--stroke-0, #155DFC)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
          <path d="M13.9992 20.9987H14.0108" id="Vector_2" stroke="var(--stroke-0, #155DFC)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
        </g>
      </svg>
    </div>
  );
}

function Container59() {
  return (
    <div className="absolute left-[32px] rounded-[10px] size-[63.996px] top-[32px]" data-name="Container">
      <Icon11 />
    </div>
  );
}

function Heading11() {
  return (
    <div className="absolute h-[27.998px] left-[32px] top-[119.99px] w-[344.245px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[20px] text-neutral-950 text-nowrap top-[0.21px] whitespace-pre">Applications mobiles</p>
    </div>
  );
}

function Paragraph6() {
  return (
    <div className="absolute h-[23.999px] left-[32px] top-[159.99px] w-[344.245px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#717182] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">{`Apps prêtes à l'emploi pour iOS et Android`}</p>
    </div>
  );
}

function Text10() {
  return (
    <div className="absolute h-[19.999px] left-0 top-0 w-[60.243px]" data-name="Text">
      <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[0.21px] whitespace-pre">Explorer</p>
    </div>
  );
}

function Icon12() {
  return (
    <div className="absolute left-[68.24px] size-[16px] top-[1.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 16 16">
        <g id="Icon">
          <path d="M3.33313 7.99952H12.6665" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33325" />
          <path d={svgPaths.p1ba22700} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33325" />
        </g>
      </svg>
    </div>
  );
}

function Container60() {
  return (
    <div className="absolute h-[19.999px] left-[32px] top-[202.41px] w-[84.241px]" data-name="Container">
      <Text10 />
      <Icon12 />
    </div>
  );
}

function Link14() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-100 border-solid h-[282.41px] left-0 rounded-[10px] top-0 w-[410.668px]" data-name="Link">
      <Container59 />
      <Heading11 />
      <Paragraph6 />
      <Container60 />
    </div>
  );
}

function Icon13() {
  return (
    <div className="absolute left-[17.99px] size-[27.998px] top-[17.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 28 28">
        <g id="Icon">
          <path d="M13.9992 8.16626V24.4996" id="Vector" stroke="var(--stroke-0, #00A63E)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
          <path d={svgPaths.pe1ae780} id="Vector_2" stroke="var(--stroke-0, #00A63E)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
        </g>
      </svg>
    </div>
  );
}

function Container61() {
  return (
    <div className="absolute left-[32px] rounded-[10px] size-[63.996px] top-[32px]" data-name="Container">
      <Icon13 />
    </div>
  );
}

function Heading12() {
  return (
    <div className="absolute h-[27.998px] left-[32px] top-[119.99px] w-[344.245px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[20px] text-neutral-950 text-nowrap top-[0.21px] whitespace-pre">Ebooks</p>
    </div>
  );
}

function Paragraph7() {
  return (
    <div className="absolute h-[47.997px] left-[32px] top-[159.99px] w-[344.245px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#717182] text-[16px] top-[-0.79px] w-[336px]">Guides et formations pour développer vos compétences</p>
    </div>
  );
}

function Text11() {
  return (
    <div className="absolute h-[19.999px] left-0 top-0 w-[60.243px]" data-name="Text">
      <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[0.21px] whitespace-pre">Explorer</p>
    </div>
  );
}

function Icon14() {
  return (
    <div className="absolute left-[68.24px] size-[16px] top-[1.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 16 16">
        <g id="Icon">
          <path d="M3.33311 7.99952H12.6664" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33325" />
          <path d={svgPaths.p1ba22700} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33325" />
        </g>
      </svg>
    </div>
  );
}

function Container62() {
  return (
    <div className="absolute h-[19.999px] left-[32px] top-[226.41px] w-[84.241px]" data-name="Container">
      <Text11 />
      <Icon14 />
    </div>
  );
}

function Link15() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-100 border-solid h-[282.41px] left-[434.67px] rounded-[10px] top-0 w-[410.668px]" data-name="Link">
      <Container61 />
      <Heading12 />
      <Paragraph7 />
      <Container62 />
    </div>
  );
}

function Icon15() {
  return (
    <div className="absolute left-[17.99px] size-[27.998px] top-[17.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 28 28">
        <g id="Icon">
          <path d={svgPaths.p3d5e3580} id="Vector" stroke="var(--stroke-0, #9810FA)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
          <path d="M3.49979 10.4994H24.4985" id="Vector_2" stroke="var(--stroke-0, #9810FA)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
          <path d="M10.4994 24.4994V10.4994" id="Vector_3" stroke="var(--stroke-0, #9810FA)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.33319" />
        </g>
      </svg>
    </div>
  );
}

function Container63() {
  return (
    <div className="absolute left-[32px] rounded-[10px] size-[63.996px] top-[32px]" data-name="Container">
      <Icon15 />
    </div>
  );
}

function Heading13() {
  return (
    <div className="absolute h-[27.998px] left-[32px] top-[119.99px] w-[344.245px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[20px] text-neutral-950 text-nowrap top-[0.21px] whitespace-pre">Templates</p>
    </div>
  );
}

function Paragraph8() {
  return (
    <div className="absolute h-[47.997px] left-[32px] top-[159.99px] w-[344.245px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#717182] text-[16px] top-[-0.79px] w-[317px]">Designs professionnels pour vos projets web</p>
    </div>
  );
}

function Text12() {
  return (
    <div className="absolute h-[19.999px] left-0 top-0 w-[60.243px]" data-name="Text">
      <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[20px] left-0 text-[#d2a30b] text-[14px] text-nowrap top-[0.21px] whitespace-pre">Explorer</p>
    </div>
  );
}

function Icon16() {
  return (
    <div className="absolute left-[68.24px] size-[16px] top-[1.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 16 16">
        <g id="Icon">
          <path d="M3.33318 7.99952H12.6665" id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33325" />
          <path d={svgPaths.p1ba22700} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33325" />
        </g>
      </svg>
    </div>
  );
}

function Container64() {
  return (
    <div className="absolute h-[19.999px] left-[32px] top-[226.41px] w-[84.241px]" data-name="Container">
      <Text12 />
      <Icon16 />
    </div>
  );
}

function Link16() {
  return (
    <div className="absolute bg-white border-[1.213px] border-gray-100 border-solid h-[282.41px] left-[869.33px] rounded-[10px] top-0 w-[410.668px]" data-name="Link">
      <Container63 />
      <Heading13 />
      <Paragraph8 />
      <Container64 />
    </div>
  );
}

function Container65() {
  return (
    <div className="h-[282.41px] relative shrink-0 w-full" data-name="Container">
      <Link14 />
      <Link15 />
      <Link16 />
    </div>
  );
}

function Categories() {
  return (
    <div className="bg-[#fffffe] relative shrink-0 w-full" data-name="Categories">
      <div className="size-full">
        <div className="content-stretch flex flex-col gap-[47.997px] items-start pb-[80px] pt-[79.995px] px-[80.033px] relative w-full">
          <Container58 />
          <Container65 />
        </div>
      </div>
    </div>
  );
}

function Heading14() {
  return (
    <div className="h-[39.998px] relative shrink-0 w-[1280px]" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[40px] left-[640.14px] not-italic text-[#1a1a1a] text-[36px] text-center text-nowrap top-[-1.64px] translate-x-[-50%] whitespace-pre">Pourquoi choisir Digital Kappa</p>
    </div>
  );
}

function Paragraph9() {
  return (
    <div className="h-[47.997px] relative shrink-0 w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[336.06px] text-[#4a5565] text-[16px] text-center top-[-0.79px] translate-x-[-50%] w-[556px]">Une marketplace pensée pour vous faire gagner du temps et accéder rapidement à des ressources de qualité</p>
    </div>
  );
}

function Container66() {
  return (
    <div className="content-stretch flex flex-col gap-[16px] items-center relative shrink-0 w-full" data-name="Container">
      <Heading14 />
      <Paragraph9 />
    </div>
  );
}

function Icon17() {
  return (
    <div className="absolute left-[18.99px] size-[25.989px] top-[18.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 26 26">
        <g id="Icon">
          <path d={svgPaths.p1e54aa00} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.16575" />
          <path d={svgPaths.pee1ca80} id="Vector_2" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.16575" />
        </g>
      </svg>
    </div>
  );
}

function Container67() {
  return (
    <div className="absolute bg-[#d2a30b] left-[115.99px] rounded-[16px] size-[63.996px] top-0" data-name="Container">
      <Icon17 />
    </div>
  );
}

function Heading15() {
  return (
    <div className="absolute h-[27.998px] left-[16px] top-[87.99px] w-[264.003px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-[132.35px] not-italic text-[#1a1a1a] text-[18px] text-center text-nowrap top-[0.43px] translate-x-[-50%] whitespace-pre">Sélection organisée</p>
    </div>
  );
}

function Paragraph10() {
  return (
    <div className="absolute h-[68.242px] left-[16px] top-[127.99px] w-[264.003px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[132.29px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[257px]">Chaque produit est soigneusement sélectionné et vérifié pour garantir la qualité et la pertinence.</p>
    </div>
  );
}

function Container68() {
  return (
    <div className="absolute h-[196.235px] left-0 top-0 w-[296.001px]" data-name="Container">
      <Container67 />
      <Heading15 />
      <Paragraph10 />
    </div>
  );
}

function Icon18() {
  return (
    <div className="absolute left-[18.99px] size-[25.989px] top-[18.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 26 26">
        <g id="Icon">
          <path d={svgPaths.p3ed0ba00} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.16575" />
        </g>
      </svg>
    </div>
  );
}

function Container69() {
  return (
    <div className="absolute bg-[#d2a30b] left-[115.99px] rounded-[16px] size-[63.996px] top-0" data-name="Container">
      <Icon18 />
    </div>
  );
}

function Heading16() {
  return (
    <div className="absolute h-[27.998px] left-[16px] top-[87.99px] w-[264.003px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-[132.43px] not-italic text-[#1a1a1a] text-[18px] text-center text-nowrap top-[0.43px] translate-x-[-50%] whitespace-pre">Téléchargement instantané</p>
    </div>
  );
}

function Paragraph11() {
  return (
    <div className="absolute h-[68.242px] left-[16px] top-[127.99px] w-[264.003px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[132.36px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[261px]">{`Accédez immédiatement à vos produits après l'achat, sans attente ni délai.`}</p>
    </div>
  );
}

function Container70() {
  return (
    <div className="absolute h-[196.235px] left-[328px] top-0 w-[296.001px]" data-name="Container">
      <Container69 />
      <Heading16 />
      <Paragraph11 />
    </div>
  );
}

function Icon19() {
  return (
    <div className="absolute left-[18.99px] size-[25.989px] top-[18.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 26 26">
        <g id="Icon">
          <path d={svgPaths.p2c6803f0} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.16575" />
        </g>
      </svg>
    </div>
  );
}

function Container71() {
  return (
    <div className="absolute bg-[#d2a30b] left-[115.99px] rounded-[16px] size-[63.996px] top-0" data-name="Container">
      <Icon19 />
    </div>
  );
}

function Heading17() {
  return (
    <div className="absolute h-[27.998px] left-[16px] top-[87.99px] w-[264.003px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-[131.89px] not-italic text-[#1a1a1a] text-[18px] text-center text-nowrap top-[0.43px] translate-x-[-50%] whitespace-pre">Paiement sécurisé</p>
    </div>
  );
}

function Paragraph12() {
  return (
    <div className="absolute h-[45.495px] left-[16px] top-[127.99px] w-[264.003px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[132.27px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[257px]">Transactions protégées et sécurisées pour acheter en toute confiance.</p>
    </div>
  );
}

function Container72() {
  return (
    <div className="absolute h-[196.235px] left-[656px] top-0 w-[296.001px]" data-name="Container">
      <Container71 />
      <Heading17 />
      <Paragraph12 />
    </div>
  );
}

function Icon20() {
  return (
    <div className="absolute left-[18.99px] size-[25.989px] top-[18.99px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 26 26">
        <g id="Icon">
          <path d={svgPaths.p2e21a00} id="Vector" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.16575" />
          <path d={svgPaths.p16bacd00} id="Vector_2" stroke="var(--stroke-0, white)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.16575" />
        </g>
      </svg>
    </div>
  );
}

function Container73() {
  return (
    <div className="absolute bg-[#d2a30b] left-[115.99px] rounded-[16px] size-[63.996px] top-0" data-name="Container">
      <Icon20 />
    </div>
  );
}

function Heading18() {
  return (
    <div className="absolute h-[27.998px] left-[16px] top-[87.99px] w-[264.003px]" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-[132.5px] not-italic text-[#1a1a1a] text-[18px] text-center text-nowrap top-[0.43px] translate-x-[-50%] whitespace-pre">Gain de temps</p>
    </div>
  );
}

function Paragraph13() {
  return (
    <div className="absolute h-[68.242px] left-[16px] top-[127.99px] w-[264.003px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[22.75px] left-[132.04px] text-[#4a5565] text-[14px] text-center top-[0.43px] translate-x-[-50%] w-[243px]">Trouvez rapidement ce dont vous avez besoin grâce à notre interface simple et intuitive.</p>
    </div>
  );
}

function Container74() {
  return (
    <div className="absolute h-[196.235px] left-[984px] top-0 w-[296.001px]" data-name="Container">
      <Container73 />
      <Heading18 />
      <Paragraph13 />
    </div>
  );
}

function Container75() {
  return (
    <div className="h-[196.235px] relative shrink-0 w-full" data-name="Container">
      <Container68 />
      <Container70 />
      <Container72 />
      <Container74 />
    </div>
  );
}

function Container76() {
  return (
    <div className="content-stretch flex flex-col gap-[63.996px] h-[400.223px] items-start relative shrink-0 w-full" data-name="Container">
      <Container66 />
      <Container75 />
    </div>
  );
}

function WhyChooseUs() {
  return (
    <div className="bg-gradient-to-b from-[#f9fafb] relative shrink-0 to-[#ffffff] w-full" data-name="WhyChooseUs">
      <div className="size-full">
        <div className="content-stretch flex flex-col items-start pb-[80px] pt-[79.995px] px-[80.033px] relative w-full">
          <Container76 />
        </div>
      </div>
    </div>
  );
}

function Heading19() {
  return (
    <div className="h-[95.994px] relative shrink-0 w-full" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[48px] left-0 not-italic text-[#1a1a1a] text-[48px] top-[-1.28px] w-[479px]">Digital Kappa, votre partenaire digital</p>
    </div>
  );
}

function Paragraph14() {
  return (
    <div className="h-[129.964px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[32.5px] left-0 text-[#4a5565] text-[20px] top-[-0.36px] w-[590px]">{`Digital Kappa naît de l'envie de proposer des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.`}</p>
    </div>
  );
}

function Paragraph15() {
  return (
    <div className="h-[146.247px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[29.25px] left-0 text-[#4a5565] text-[18px] top-[-0.36px] w-[583px]">{`Notre mission : rendre l'accès aux outils digitaux plus rapide, plus clair et plus fiable. Contrairement aux marketplaces géantes où il est difficile de s'y retrouver, nous proposons une sélection organisée qui évite la confusion et vous fait gagner un temps précieux.`}</p>
    </div>
  );
}

function Icon21() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p29eafd00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p6c61c00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Text13() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[222.053px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[222.053px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#364153] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Téléchargement instantané</p>
      </div>
    </div>
  );
}

function Container77() {
  return (
    <div className="content-stretch flex gap-[11.999px] h-[23.999px] items-center relative shrink-0 w-full" data-name="Container">
      <Icon21 />
      <Text13 />
    </div>
  );
}

function Icon22() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p29eafd00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p6c61c00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Text14() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[241.085px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[241.085px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#364153] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Organisation claire et intuitive</p>
      </div>
    </div>
  );
}

function Container78() {
  return (
    <div className="content-stretch flex gap-[11.999px] h-[23.999px] items-center relative shrink-0 w-full" data-name="Container">
      <Icon22 />
      <Text14 />
    </div>
  );
}

function Icon23() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p29eafd00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p6c61c00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Text15() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[307.944px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[307.944px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#364153] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Qualité constante sur tous les produits</p>
      </div>
    </div>
  );
}

function Container79() {
  return (
    <div className="content-stretch flex gap-[11.999px] h-[23.999px] items-center relative shrink-0 w-full" data-name="Container">
      <Icon23 />
      <Text15 />
    </div>
  );
}

function Icon24() {
  return (
    <div className="relative shrink-0 size-[23.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 24 24">
        <g id="Icon">
          <path d={svgPaths.p29eafd00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
          <path d={svgPaths.p6c61c00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.99988" />
        </g>
      </svg>
    </div>
  );
}

function Text16() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[230.887px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[230.887px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#364153] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Interface moderne et épurée</p>
      </div>
    </div>
  );
}

function Container80() {
  return (
    <div className="content-stretch flex gap-[11.999px] h-[23.999px] items-center relative shrink-0 w-full" data-name="Container">
      <Icon24 />
      <Text16 />
    </div>
  );
}

function Container81() {
  return (
    <div className="content-stretch flex flex-col gap-[15.999px] h-[159.99px] items-start pb-0 pt-[15.999px] px-0 relative shrink-0 w-full" data-name="Container">
      <Container77 />
      <Container78 />
      <Container79 />
      <Container80 />
    </div>
  );
}

function Paragraph16() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Italic',sans-serif] font-normal italic leading-[20px] left-0 text-[#6a7282] text-[14px] text-nowrap top-[0.21px] whitespace-pre">{`"Simplicité • Accessibilité • Qualité • Modernité • Fiabilité"`}</p>
    </div>
  );
}

function Container82() {
  return (
    <div className="content-stretch flex flex-col gap-[29px] items-start relative shrink-0 w-[608.002px]" data-name="Container">
      <Heading19 />
      <Paragraph14 />
      <Paragraph15 />
      <Container81 />
      <Paragraph16 />
    </div>
  );
}

function Container83() {
  return <div className="absolute bg-[rgba(210,163,11,0.2)] left-[440.01px] rounded-[16px] size-[191.989px] top-[-24px]" data-name="Container" />;
}

function Container84() {
  return <div className="absolute left-[-24px] rounded-[16px] size-[191.989px] top-[174.28px]" data-name="Container" />;
}

function ImageDigitalKappa() {
  return (
    <div className="absolute h-[342.273px] left-0 rounded-[16px] shadow-[0px_25px_50px_-12px_rgba(0,0,0,0.25)] top-0 w-[608.002px]" data-name="Image (Digital Kappa)">
      <div aria-hidden="true" className="absolute inset-0 pointer-events-none rounded-[16px]">
        <div className="absolute bg-[rgba(255,255,255,0)] inset-0 rounded-[16px]" />
        <img alt="" className="absolute max-w-none object-50%-50% object-cover rounded-[16px] size-full" src={imgImageDigitalKappa} />
      </div>
    </div>
  );
}

function Container85() {
  return (
    <div className="h-[342.273px] relative shrink-0 w-[608.002px]" data-name="Container">
      <Container83 />
      <Container84 />
      <ImageDigitalKappa />
    </div>
  );
}

function About() {
  return (
    <div className="bg-[#fffffe] relative shrink-0 w-full" data-name="About">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex items-center justify-between p-[80px] relative w-full">
          <Container82 />
          <Container85 />
        </div>
      </div>
    </div>
  );
}

function Heading20() {
  return (
    <div className="h-[39.998px] relative shrink-0 w-[895.985px]" data-name="Heading 2">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[40px] left-[448.81px] not-italic text-[#1a1a1a] text-[36px] text-center text-nowrap top-[-1.64px] translate-x-[-50%] whitespace-pre">Questions fréquentes</p>
    </div>
  );
}

function Paragraph17() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[895.985px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-[448.09px] text-[#4a5565] text-[16px] text-center text-nowrap top-[-0.79px] translate-x-[-50%] whitespace-pre">Retrouvez les réponses aux questions les plus courantes</p>
    </div>
  );
}

function Container86() {
  return (
    <div className="content-stretch flex flex-col gap-[16px] items-center relative shrink-0" data-name="Container">
      <Heading20 />
      <Paragraph17 />
    </div>
  );
}

function Text17() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[438.704px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[438.704px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#1a1a1a] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">{`Comment télécharger mes produits après l'achat ?`}</p>
      </div>
    </div>
  );
}

function Icon25() {
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

function Button2() {
  return (
    <div className="h-[71.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[71.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text17 />
          <Icon25 />
        </div>
      </div>
    </div>
  );
}

function Paragraph18() {
  return (
    <div className="h-[52px] relative shrink-0 w-[1230px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] left-0 text-[#4a5565] text-[16px] top-[-0.57px] w-[792px]">Après votre achat, vous recevez immédiatement un lien de téléchargement par email. Vous pouvez également accéder à tous vos produits depuis votre compte.</p>
    </div>
  );
}

function Container87() {
  return (
    <div className="absolute bg-white left-0 rounded-[14px] top-[0.31px] w-[1280px]" data-name="Container">
      <div className="content-stretch flex flex-col items-center overflow-clip pb-[22px] pt-px px-px relative rounded-[inherit] w-[1280px]">
        <Button2 />
        <Paragraph18 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text18() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[491.383px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[491.383px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#1a1a1a] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Les produits sont-ils compatibles avec tous les appareils ?</p>
      </div>
    </div>
  );
}

function Icon26() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.16626V15.8329" id="Vector_2" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button3() {
  return (
    <div className="h-[71.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[71.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text18 />
          <Icon26 />
        </div>
      </div>
    </div>
  );
}

function Container88() {
  return (
    <div className="absolute bg-white h-[75px] left-0 rounded-[14px] top-[166.31px] w-[1279px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[75px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1279px]">
        <Button3 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text19() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[324.417px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[324.417px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#1a1a1a] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">Puis-je obtenir un remboursement ?</p>
      </div>
    </div>
  );
}

function Icon27() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.16626V15.8329" id="Vector_2" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button4() {
  return (
    <div className="h-[71.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[71.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text19 />
          <Icon27 />
        </div>
      </div>
    </div>
  );
}

function Container89() {
  return (
    <div className="absolute bg-white h-[74px] left-0 rounded-[14px] top-[257.31px] w-[1278px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[74px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1278px]">
        <Button4 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Text20() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-[289.746px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[23.999px] relative w-[289.746px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#1a1a1a] text-[16px] text-nowrap top-[-0.79px] whitespace-pre">{`Y a-t-il une licence d'utilisation ?`}</p>
      </div>
    </div>
  );
}

function Icon28() {
  return (
    <div className="relative shrink-0 size-[19.999px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g id="Icon">
          <path d="M4.16638 9.9994H15.833" id="Vector" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d="M9.9994 4.16626V15.8329" id="Vector_2" stroke="var(--stroke-0, #99A1AF)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
      </svg>
    </div>
  );
}

function Button5() {
  return (
    <div className="h-[71.996px] relative shrink-0 w-full" data-name="Button">
      <div className="flex flex-row items-center size-full">
        <div className="content-stretch flex h-[71.996px] items-center justify-between px-[23.999px] py-0 relative w-full">
          <Text20 />
          <Icon28 />
        </div>
      </div>
    </div>
  );
}

function Container90() {
  return (
    <div className="absolute bg-white h-[74px] left-0 rounded-[14px] top-[347.31px] w-[1277px]" data-name="Container">
      <div className="content-stretch flex flex-col h-[74px] items-start overflow-clip p-[1.213px] relative rounded-[inherit] w-[1277px]">
        <Button5 />
      </div>
      <div aria-hidden="true" className="absolute border-[1.213px] border-gray-200 border-solid inset-0 pointer-events-none rounded-[14px]" />
    </div>
  );
}

function Container91() {
  return (
    <div className="h-[421px] relative shrink-0 w-full" data-name="Container">
      <Container87 />
      <Container88 />
      <Container89 />
      <Container90 />
    </div>
  );
}

function Link17() {
  return (
    <div className="content-stretch flex h-[16.985px] items-start relative shrink-0 w-[182.245px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#d2a30b] text-[14px] text-center text-nowrap whitespace-pre">Voir toutes les questions →</p>
    </div>
  );
}

function HomeFaq() {
  return (
    <div className="bg-gradient-to-b from-[#ffffff] relative shrink-0 to-[#f9fafb] w-full" data-name="HomeFAQ">
      <div className="flex flex-col items-center size-full">
        <div className="content-stretch flex flex-col gap-[42px] items-center p-[80px] relative w-full">
          <Container86 />
          <Container91 />
          <Link17 />
        </div>
      </div>
    </div>
  );
}

function Heading21() {
  return (
    <div className="content-stretch flex items-center justify-center px-[48px] py-0 relative shrink-0" data-name="Heading 2">
      <p className="font-['Merriweather:Regular',sans-serif] leading-[48px] not-italic relative shrink-0 text-[48px] text-center text-nowrap text-white whitespace-pre">Prêt à découvrir nos produits digitaux ?</p>
    </div>
  );
}

function Paragraph19() {
  return (
    <div className="h-[83.995px] relative shrink-0 w-[671.998px]" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-[336.06px] text-[#d1d5dc] text-[20px] text-center top-[-0.79px] translate-x-[-50%] w-[638px]">Rejoignez les milliers de créateurs et entrepreneurs qui utilisent Digital Kappa pour gagner du temps et accéder à des ressources de qualité.</p>
    </div>
  );
}

function Icon29() {
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

function Link18() {
  return (
    <div className="bg-[#d2a30b] h-[58.423px] relative rounded-[10px] shrink-0 w-[266.297px]" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[58.423px] relative w-[266.297px]">
        <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[24px] left-[119.5px] text-[16px] text-center text-nowrap text-white top-[16.43px] translate-x-[-50%] whitespace-pre">Explorer le catalogue</p>
        <Icon29 />
      </div>
    </div>
  );
}

function Link19() {
  return (
    <div className="bg-white h-[58.423px] relative rounded-[10px] shrink-0 w-[180.103px]" data-name="Link">
      <div aria-hidden="true" className="absolute border-[#d2a30b] border-[1.213px] border-solid inset-0 pointer-events-none rounded-[10px]" />
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[58.423px] relative w-[180.103px]">
        <p className="absolute font-['Montserrat:SemiBold',sans-serif] font-semibold leading-[24px] left-[90.21px] text-[#d2a30b] text-[16px] text-center text-nowrap top-[16.43px] translate-x-[-50%] whitespace-pre">En savoir plus</p>
      </div>
    </div>
  );
}

function Container92() {
  return (
    <div className="content-stretch flex gap-[15.999px] h-[74.422px] items-start justify-center pb-0 pt-[15.999px] px-0 relative shrink-0" data-name="Container">
      <Link18 />
      <Link19 />
    </div>
  );
}

function Container93() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular','Noto_Sans:Regular',sans-serif] font-normal leading-[36px] relative shrink-0 text-[#d2a30b] text-[30px] text-center text-nowrap whitespace-pre">✓</p>
    </div>
  );
}

function Container94() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[16px] text-center text-nowrap text-white whitespace-pre">Téléchargement instantané</p>
    </div>
  );
}

function Container95() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-center text-nowrap whitespace-pre">Accès immédiat à vos produits</p>
    </div>
  );
}

function Container96() {
  return (
    <div className="content-stretch flex flex-col gap-[7.999px] h-[91.995px] items-center relative shrink-0 w-[223.987px]" data-name="Container">
      <Container93 />
      <Container94 />
      <Container95 />
    </div>
  );
}

function Container97() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular','Noto_Sans:Regular',sans-serif] font-normal leading-[36px] relative shrink-0 text-[#d2a30b] text-[30px] text-center text-nowrap whitespace-pre">✓</p>
    </div>
  );
}

function Container98() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0 w-[128px]" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[16px] text-center text-nowrap text-white whitespace-pre">Qualité garantie</p>
    </div>
  );
}

function Container99() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0 w-[146px]" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-center text-nowrap whitespace-pre">Sélection rigoureuse</p>
    </div>
  );
}

function Container100() {
  return (
    <div className="content-stretch flex flex-col gap-[7.999px] items-center relative shrink-0" data-name="Container">
      <Container97 />
      <Container98 />
      <Container99 />
    </div>
  );
}

function Container101() {
  return (
    <div className="content-stretch flex items-center justify-center px-[27px] py-0 relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular','Noto_Sans:Regular',sans-serif] font-normal leading-[36px] relative shrink-0 text-[#d2a30b] text-[30px] text-center text-nowrap whitespace-pre">✓</p>
    </div>
  );
}

function Container102() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[16px] text-center text-nowrap text-white whitespace-pre">Support réactif</p>
    </div>
  );
}

function Container103() {
  return (
    <div className="content-stretch flex items-center justify-center px-[36px] py-0 relative shrink-0 w-[153px]" data-name="Container">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-center text-nowrap whitespace-pre">Assistance disponible</p>
    </div>
  );
}

function Container104() {
  return (
    <div className="content-stretch flex flex-col gap-[7.999px] items-center relative shrink-0" data-name="Container">
      <Container101 />
      <Container102 />
      <Container103 />
    </div>
  );
}

function Container105() {
  return (
    <div className="content-stretch flex items-center justify-between px-[16px] py-0 relative shrink-0 w-[767.998px]" data-name="Container">
      <Container96 />
      <Container100 />
      <Container104 />
    </div>
  );
}

function Container106() {
  return (
    <div className="basis-0 grow min-h-px min-w-px relative shrink-0" data-name="Container">
      <div className="flex flex-col items-center size-full">
        <div className="content-stretch flex flex-col gap-[32px] items-center px-[80px] py-0 relative w-full">
          <Heading21 />
          <Paragraph19 />
          <Container92 />
          <Container105 />
        </div>
      </div>
    </div>
  );
}

function Container107() {
  return <div className="absolute bg-[rgba(210,163,11,0.1)] blur-3xl filter left-[-175.96px] rounded-[4.07082e+07px] size-[383.996px] top-[109.2px]" data-name="Container" />;
}

function Container108() {
  return <div className="absolute bg-[rgba(210,163,11,0.1)] blur-3xl filter left-[1232.03px] rounded-[4.07082e+07px] size-[383.996px] top-[109.2px]" data-name="Container" />;
}

function Cta() {
  return (
    <div className="bg-gradient-to-b content-stretch flex from-[#1a1a1a] items-center justify-center overflow-clip px-0 py-[80px] relative shrink-0 to-[#1a1a1a] via-50% via-[#2a2a2a] w-full" data-name="CTA">
      <Container106 />
      <Container107 />
      <Container108 />
    </div>
  );
}

function MainContent() {
  return (
    <div className="absolute content-stretch flex flex-col items-start left-0 top-0 w-[1440.07px]" data-name="Main Content">
      <HeroFigma />
      <SocialProof />
      <Portfolio />
      <Categories />
      <WhyChooseUs />
      <About />
      <HomeFaq />
      <Cta />
    </div>
  );
}

function SeoText() {
  return (
    <div className="absolute bg-gray-50 content-stretch flex flex-col gap-[23.998px] items-center left-0 px-0 py-[80px] top-[4887.58px] w-[1440px]" data-name="SEOText">
      <p className="font-['Merriweather:Regular',sans-serif] leading-[36px] not-italic relative shrink-0 text-[#1a1a1a] text-[30px] text-center w-[814px]">Digital Kappa : Votre marketplace de produits digitaux professionnels</p>
      <div className="font-['Montserrat:Regular',sans-serif] font-normal leading-[26px] relative shrink-0 text-[#364153] text-[16px] w-[889px]">
        <p className="mb-0">{`Digital Kappa est la marketplace française spécialisée dans la vente de produits digitaux de qualité professionnelle. Nous proposons une sélection rigoureuse d'ebooks, d'applications mobiles et web, ainsi que de templates pour développeurs, designers, freelances et entrepreneurs.`}</p>
        <p className="mb-0">&nbsp;</p>
        <p className="mb-0">{`Notre mission est de vous faire gagner du temps en vous offrant un accès direct à des ressources prêtes à l'emploi, sans la confusion des grandes marketplaces. Chaque produit est testé et sélectionné selon des critères stricts de qualité, de fiabilité et d'utilité pratique.`}</p>
        <p className="mb-0">&nbsp;</p>
        <p className="mb-0">{`Que vous soyez développeur débutant à la recherche de templates React, freelance cherchant des ebooks pour développer votre business, ou professionnel ayant besoin d'applications web performantes, Digital Kappa vous propose des solutions adaptées à vos besoins. Notre système d'achat en un clic inspiré de Gumroad vous garantit une expérience simple et rapide, sans création de compte obligatoire.`}</p>
        <p className="mb-0">&nbsp;</p>
        <p>{`Basée en France et conforme au RGPD, Digital Kappa s'engage pour la transparence, la sécurité de vos données et la qualité constante de son catalogue. Rejoignez des milliers d'utilisateurs qui nous font confiance pour accélérer leurs projets digitaux.`}</p>
      </div>
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

function Icon30() {
  return (
    <div className="h-[31.998px] overflow-clip relative shrink-0 w-full" data-name="Icon">
      <ClipPathGroup1 />
    </div>
  );
}

function Calque3() {
  return (
    <div className="content-stretch flex flex-col h-[31.998px] items-start relative shrink-0 w-full" data-name="Calque">
      <Icon30 />
    </div>
  );
}

function Container109() {
  return (
    <div className="bg-white h-[39.998px] relative rounded-[4px] shrink-0 w-[55.997px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex flex-col h-[39.998px] items-start pb-0 pt-[4px] px-[4px] relative w-[55.997px]">
        <Calque3 />
      </div>
    </div>
  );
}

function Text21() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-[136.106px]" data-name="Text">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[27.998px] relative w-[136.106px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] left-0 text-[20px] text-nowrap text-white top-[-0.79px] whitespace-pre">Digital Kappa</p>
      </div>
    </div>
  );
}

function Container110() {
  return (
    <div className="content-stretch flex gap-[11.999px] h-[39.998px] items-center relative shrink-0 w-full" data-name="Container">
      <Container109 />
      <Text21 />
    </div>
  );
}

function Paragraph20() {
  return (
    <div className="h-[95.994px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#99a1af] text-[16px] top-[-0.79px] w-[222px]">Des ressources numériques simples et de qualité pour créateurs, entrepreneurs et passionnés.</p>
    </div>
  );
}

function Icon31() {
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

function Link20() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-0 pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon31 />
    </div>
  );
}

function Icon32() {
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

function Link21() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-[56px] pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon32 />
    </div>
  );
}

function Icon33() {
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

function Link22() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-[111.99px] pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon33 />
    </div>
  );
}

function Icon34() {
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

function Link23() {
  return (
    <div className="absolute bg-[rgba(255,255,255,0.1)] content-stretch flex items-center justify-center left-[167.99px] pl-0 pr-[0.019px] py-0 rounded-[10px] size-[39.998px] top-0" data-name="Link">
      <Icon34 />
    </div>
  );
}

function Container111() {
  return (
    <div className="h-[39.998px] relative shrink-0 w-full" data-name="Container">
      <Link20 />
      <Link21 />
      <Link22 />
      <Link23 />
    </div>
  );
}

function Container112() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[23.998px] h-[223.987px] items-start left-0 top-0 w-[268.003px]" data-name="Container">
      <Container110 />
      <Paragraph20 />
      <Container111 />
    </div>
  );
}

function Heading22() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[0.43px] whitespace-pre">Légal</p>
    </div>
  );
}

function Link24() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[71.446px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">À propos</p>
    </div>
  );
}

function ListItem() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link24 />
    </div>
  );
}

function Link25() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[34.785px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">CGV</p>
    </div>
  );
}

function ListItem1() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link25 />
    </div>
  );
}

function Link26() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[117.718px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Confidentialité</p>
    </div>
  );
}

function ListItem2() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link26 />
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

function Container113() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[15.999px] h-[223.987px] items-start left-[316px] top-0 w-[268.003px]" data-name="Container">
      <Heading22 />
      <List />
    </div>
  );
}

function Heading23() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[0.43px] whitespace-pre">Ressources</p>
    </div>
  );
}

function Link27() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[106.477px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">{`Centre d'aide`}</p>
    </div>
  );
}

function ListItem3() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link27 />
    </div>
  );
}

function Link28() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[68.299px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Tutoriels</p>
    </div>
  );
}

function ListItem4() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link28 />
    </div>
  );
}

function Link29() {
  return (
    <div className="absolute content-stretch flex h-[19.411px] items-start left-0 top-[1.21px] w-[65.456px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Support</p>
    </div>
  );
}

function ListItem5() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="List Item">
      <Link29 />
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

function Container114() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[15.999px] h-[223.987px] items-start left-[632px] top-0 w-[268.003px]" data-name="Container">
      <Heading23 />
      <List1 />
    </div>
  );
}

function Heading24() {
  return (
    <div className="h-[27.998px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[0.43px] whitespace-pre">Contact</p>
    </div>
  );
}

function Icon35() {
  return (
    <div className="absolute left-0 size-[19.999px] top-[4px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_1_587)" id="Icon">
          <path d={svgPaths.p24d83580} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
          <path d={svgPaths.pd919a80} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66657" />
        </g>
        <defs>
          <clipPath id="clip0_1_587">
            <rect fill="white" height="19.9988" width="19.9988" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container115() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-nowrap text-white top-[-0.79px] whitespace-pre">Email</p>
    </div>
  );
}

function Link30() {
  return (
    <div className="content-stretch flex h-[19.411px] items-start relative shrink-0 w-full" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">contact@digitalkappa.com</p>
    </div>
  );
}

function Container116() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[5.213px] h-[51.997px] items-start left-[32px] top-0 w-[217.314px]" data-name="Container">
      <Container115 />
      <Link30 />
    </div>
  );
}

function ListItem6() {
  return (
    <div className="h-[51.997px] relative shrink-0 w-full" data-name="List Item">
      <Icon35 />
      <Container116 />
    </div>
  );
}

function Icon36() {
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

function Container117() {
  return (
    <div className="h-[23.999px] relative shrink-0 w-full" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-nowrap text-white top-[-0.79px] whitespace-pre">Localisation</p>
    </div>
  );
}

function Text22() {
  return (
    <div className="content-stretch flex h-[19.411px] items-start relative shrink-0 w-full" data-name="Text">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">En ligne, partout</p>
    </div>
  );
}

function Container118() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[5.213px] h-[51.997px] items-start left-[32px] top-0 w-[133.679px]" data-name="Container">
      <Container117 />
      <Text22 />
    </div>
  );
}

function ListItem7() {
  return (
    <div className="h-[51.997px] relative shrink-0 w-full" data-name="List Item">
      <Icon36 />
      <Container118 />
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

function Container119() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[15.999px] h-[223.987px] items-start left-[948px] top-0 w-[268.003px]" data-name="Container">
      <Heading24 />
      <List2 />
    </div>
  );
}

function Container120() {
  return (
    <div className="h-[223.987px] relative shrink-0 w-full" data-name="Container">
      <Container112 />
      <Container113 />
      <Container114 />
      <Container119 />
    </div>
  );
}

function Paragraph21() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-[294.769px]" data-name="Paragraph">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[19.999px] relative w-[294.769px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-0 text-[#99a1af] text-[14px] text-nowrap top-[0.21px] whitespace-pre">© 2024 Digital Kappa. Tous droits réservés.</p>
      </div>
    </div>
  );
}

function Link31() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-[30.444px]" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[19.999px] relative w-[30.444px]">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-[15.5px] text-[#99a1af] text-[14px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">CGV</p>
      </div>
    </div>
  );
}

function Link32() {
  return (
    <div className="basis-0 grow h-[19.999px] min-h-px min-w-px relative shrink-0" data-name="Link">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid h-[19.999px] relative w-full">
        <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] left-[95px] text-[#99a1af] text-[14px] text-center text-nowrap top-[0.21px] translate-x-[-50%] whitespace-pre">Politique de confidentialité</p>
      </div>
    </div>
  );
}

function Container121() {
  return (
    <div className="h-[19.999px] relative shrink-0 w-[243.663px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex gap-[23.999px] h-[19.999px] items-start relative w-[243.663px]">
        <Link31 />
        <Link32 />
      </div>
    </div>
  );
}

function Container122() {
  return (
    <div className="content-stretch flex h-[19.999px] items-center justify-between relative shrink-0 w-full" data-name="Container">
      <Paragraph21 />
      <Container121 />
    </div>
  );
}

function Container123() {
  return (
    <div className="content-stretch flex flex-col h-[53.21px] items-start pb-0 pt-[33.211px] px-0 relative shrink-0 w-full" data-name="Container">
      <div aria-hidden="true" className="absolute border-[#364153] border-[1.213px_0px_0px] border-solid inset-0 pointer-events-none" />
      <Container122 />
    </div>
  );
}

function Footer() {
  return (
    <div className="absolute bg-[#1a1a1a] content-stretch flex flex-col gap-[47.997px] h-[453.186px] items-start left-0 pb-0 pt-[63.996px] px-[112.031px] top-[5559.58px] w-[1440.07px]" data-name="Footer">
      <Container120 />
      <Container123 />
    </div>
  );
}

function App() {
  return (
    <div className="h-[6013px] relative shrink-0 w-[1440px]" data-name="App">
      <MainContent />
      <SeoText />
      <Footer />
    </div>
  );
}

export default function CreerPageDaccueilModerne() {
  return (
    <div className="bg-white content-stretch flex flex-col items-start justify-center relative size-full" data-name="Créer page d\'accueil moderne">
      <Navigation />
      <App />
    </div>
  );
}