import svgPaths from "./svg-askx6sz37g";
import { imgCalque1 } from "./svg-wtsuk";

function Calque() {
  return (
    <div className="absolute bottom-[0.02%] left-0 mask-alpha mask-intersect mask-no-clip mask-no-repeat mask-position-[0px] mask-size-[47.971px_31.975px] right-[0.03%] top-0" data-name="Calque_1" style={{ maskImage: `url('${imgCalque1}')` }}>
      <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 48 32">
        <g id="Calque_1">
          <path d={svgPaths.p214b5580} fill="var(--fill-0, white)" id="Vector" />
          <path d={svgPaths.pce30700} fill="var(--fill-0, white)" id="Vector_2" />
        </g>
      </svg>
    </div>
  );
}

function ClipPathGroup() {
  return (
    <div className="absolute bottom-[0.02%] contents left-0 right-[0.03%] top-0" data-name="Clip path group">
      <Calque />
    </div>
  );
}

export default function Icon() {
  return (
    <div className="relative size-full" data-name="Icon">
      <ClipPathGroup />
    </div>
  );
}