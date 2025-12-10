import svgPaths from "./svg-94zzxgwe7z";
import { imgVector } from "./svg-izpjv";

function Calque1() {
  return (
    <div className="absolute bottom-[0.02%] contents left-0 right-[0.03%] top-0" data-name="Calque_1">
      <div className="absolute bottom-[0.02%] left-[64.82%] mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[-31.104px_0px] mask-size-[47.971px_31.975px] right-[0.03%] top-0" data-name="Vector" style={{ maskImage: `url('${imgVector}')` }}>
        <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 17 32">
          <path d={svgPaths.p6bed000} fill="var(--fill-0, white)" id="Vector" />
        </svg>
      </div>
      <div className="absolute bottom-[0.02%] left-0 mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[0px] mask-size-[47.971px_31.975px] right-[40.39%] top-0" data-name="Vector_2" style={{ maskImage: `url('${imgVector}')` }}>
        <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 29 32">
          <path d={svgPaths.p21926b80} fill="var(--fill-0, white)" id="Vector_2" />
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
    <div className="h-[31.982px] overflow-clip relative shrink-0 w-full" data-name="Icon">
      <ClipPathGroup />
    </div>
  );
}

function Calque() {
  return (
    <div className="content-stretch flex flex-col h-[31.982px] items-start relative shrink-0 w-full" data-name="Calque">
      <Icon />
    </div>
  );
}

function Container() {
  return (
    <div className="h-[39.952px] relative rounded-[4px] shrink-0 w-[55.953px]" data-name="Container">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex flex-col h-[39.952px] items-start pb-0 pt-[3.985px] px-[3.985px] relative w-[55.953px]">
        <Calque />
      </div>
    </div>
  );
}

function Container1() {
  return (
    <div className="content-stretch flex h-[39.952px] items-center relative shrink-0 w-full" data-name="Container">
      <Container />
    </div>
  );
}

function Paragraph() {
  return (
    <div className="h-[95.967px] relative shrink-0 w-full" data-name="Paragraph">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[#99a1af] text-[16px] top-[-0.66px] w-[222px]">Des ressources numériques simples et de qualité pour créateurs, entrepreneurs et passionnés.</p>
    </div>
  );
}

function Container2() {
  return (
    <div className="content-stretch flex flex-col gap-[23.992px] h-[223.896px] items-start relative shrink-0 w-[268.02px]" data-name="Container">
      <Container1 />
      <Paragraph />
    </div>
  );
}

function Heading() {
  return (
    <div className="h-[27.997px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[-0.66px] whitespace-pre">Légal</p>
    </div>
  );
}

function Link() {
  return (
    <div className="absolute content-stretch flex h-[20.028px] items-start left-0 top-[1.34px] w-[71.475px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">À propos</p>
    </div>
  );
}

function ListItem() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="List Item">
      <Link />
    </div>
  );
}

function Link1() {
  return (
    <div className="absolute content-stretch flex h-[20.028px] items-start left-0 top-[1.33px] w-[34.799px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">CGV</p>
    </div>
  );
}

function ListItem1() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="List Item">
      <Link1 />
    </div>
  );
}

function Link2() {
  return (
    <div className="absolute content-stretch flex h-[20.028px] items-start left-0 top-[1.33px] w-[117.748px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Confidentialité</p>
    </div>
  );
}

function ListItem2() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="List Item">
      <Link2 />
    </div>
  );
}

function List() {
  return (
    <div className="content-stretch flex flex-col gap-[11.996px] h-[95.967px] items-start relative shrink-0 w-full" data-name="List">
      <ListItem />
      <ListItem1 />
      <ListItem2 />
    </div>
  );
}

function Container3() {
  return (
    <div className="content-stretch flex flex-col gap-[15.981px] h-[223.896px] items-start relative shrink-0 w-[268.02px]" data-name="Container">
      <Heading />
      <List />
    </div>
  );
}

function Heading1() {
  return (
    <div className="h-[27.997px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[-0.66px] whitespace-pre">Catégories</p>
    </div>
  );
}

function Link3() {
  return (
    <div className="absolute content-stretch flex h-[20.028px] items-start left-0 top-[1.34px] w-[106.524px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Ebooks</p>
    </div>
  );
}

function ListItem3() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="List Item">
      <Link3 />
    </div>
  );
}

function Link4() {
  return (
    <div className="absolute content-stretch flex h-[20.028px] items-start left-0 top-[1.33px] w-[68.324px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Applications</p>
    </div>
  );
}

function ListItem4() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="List Item">
      <Link4 />
    </div>
  );
}

function Link5() {
  return (
    <div className="absolute content-stretch flex h-[20.028px] items-start left-0 top-[1.33px] w-[65.466px]" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">Templates</p>
    </div>
  );
}

function ListItem5() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="List Item">
      <Link5 />
    </div>
  );
}

function List1() {
  return (
    <div className="content-stretch flex flex-col gap-[11.996px] h-[95.967px] items-start relative shrink-0 w-full" data-name="List">
      <ListItem3 />
      <ListItem4 />
      <ListItem5 />
    </div>
  );
}

function Container4() {
  return (
    <div className="content-stretch flex flex-col gap-[15.981px] h-[223.896px] items-start relative shrink-0 w-[268.02px]" data-name="Container">
      <Heading1 />
      <List1 />
    </div>
  );
}

function Heading2() {
  return (
    <div className="h-[27.997px] relative shrink-0 w-full" data-name="Heading 3">
      <p className="absolute font-['Merriweather:Regular',sans-serif] leading-[28px] left-0 not-italic text-[18px] text-nowrap text-white top-[-0.66px] whitespace-pre">Contact</p>
    </div>
  );
}

function Icon1() {
  return (
    <div className="absolute left-0 size-[19.986px] top-[3.98px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_10_8346)" id="Icon">
          <path d={svgPaths.p13eb2d00} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66552" />
          <path d={svgPaths.p1be8dd00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66552" />
        </g>
        <defs>
          <clipPath id="clip0_10_8346">
            <rect fill="white" height="19.9862" width="19.9862" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container5() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-nowrap text-white top-[-0.66px] whitespace-pre">Email</p>
    </div>
  );
}

function Link6() {
  return (
    <div className="content-stretch flex h-[20.028px] items-start relative shrink-0 w-full" data-name="Link">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">contact@digitalkappa.com</p>
    </div>
  );
}

function Container6() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[5.32px] h-[51.968px] items-start left-[31.98px] top-0 w-[217.387px]" data-name="Container">
      <Container5 />
      <Link6 />
    </div>
  );
}

function ListItem6() {
  return (
    <div className="h-[51.968px] relative shrink-0 w-full" data-name="List Item">
      <Icon1 />
      <Container6 />
    </div>
  );
}

function Icon2() {
  return (
    <div className="absolute left-0 size-[19.986px] top-[3.98px]" data-name="Icon">
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 20 20">
        <g clipPath="url(#clip0_10_8318)" id="Icon">
          <path d={svgPaths.pab7e800} id="Vector" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66552" />
          <path d={svgPaths.pf3ea00} id="Vector_2" stroke="var(--stroke-0, #D2A30B)" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.66552" />
        </g>
        <defs>
          <clipPath id="clip0_10_8318">
            <rect fill="white" height="19.9862" width="19.9862" />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

function Container7() {
  return (
    <div className="h-[23.992px] relative shrink-0 w-full" data-name="Container">
      <p className="absolute font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] left-0 text-[16px] text-nowrap text-white top-[-0.66px] whitespace-pre">Localisation</p>
    </div>
  );
}

function Text() {
  return (
    <div className="content-stretch flex h-[20.028px] items-start relative shrink-0 w-full" data-name="Text">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[24px] relative shrink-0 text-[#99a1af] text-[16px] text-nowrap whitespace-pre">En ligne, partout</p>
    </div>
  );
}

function Container8() {
  return (
    <div className="absolute content-stretch flex flex-col gap-[5.32px] h-[51.968px] items-start left-[31.98px] top-0 w-[133.728px]" data-name="Container">
      <Container7 />
      <Text />
    </div>
  );
}

function ListItem7() {
  return (
    <div className="h-[51.968px] relative shrink-0 w-full" data-name="List Item">
      <Icon2 />
      <Container8 />
    </div>
  );
}

function List2() {
  return (
    <div className="content-stretch flex flex-col gap-[15.98px] h-[119.917px] items-start relative shrink-0 w-full" data-name="List">
      <ListItem6 />
      <ListItem7 />
    </div>
  );
}

function Container9() {
  return (
    <div className="content-stretch flex flex-col gap-[15.981px] h-[223.896px] items-start relative shrink-0 w-[268.02px]" data-name="Container">
      <Heading2 />
      <List2 />
    </div>
  );
}

function Container10() {
  return (
    <div className="content-stretch flex gap-[48px] items-center relative shrink-0 w-full" data-name="Container">
      <Container2 />
      <Container3 />
      <Container4 />
      <Container9 />
    </div>
  );
}

function Paragraph1() {
  return (
    <div className="h-[19.986px] relative shrink-0 w-[294.87px]" data-name="Paragraph">
      <div className="bg-clip-padding border-0 border-[transparent] border-solid content-stretch flex h-[19.986px] items-start relative w-[294.87px]">
        <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[20px] relative shrink-0 text-[#99a1af] text-[14px] text-nowrap whitespace-pre">© 2024 Digital Kappa. Tous droits réservés.</p>
      </div>
    </div>
  );
}

function Container11() {
  return (
    <div className="content-stretch flex h-[19.986px] items-center justify-center relative shrink-0 w-full" data-name="Container">
      <Paragraph1 />
    </div>
  );
}

function Container12() {
  return (
    <div className="content-stretch flex flex-col h-[53.304px] items-start pb-0 pt-[33.317px] px-0 relative shrink-0 w-full" data-name="Container">
      <div aria-hidden="true" className="absolute border-[#364153] border-[1.335px_0px_0px] border-solid inset-0 pointer-events-none" />
      <Container11 />
    </div>
  );
}

export default function Footer() {
  return (
    <div className="bg-[#1a1a1a] relative size-full" data-name="Footer">
      <div className="size-full">
        <div className="content-stretch flex flex-col gap-[47.984px] items-start pb-0 pt-[63.985px] px-[111.656px] relative size-full">
          <Container10 />
          <Container12 />
        </div>
      </div>
    </div>
  );
}