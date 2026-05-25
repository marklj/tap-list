import TapCard from "~/components/TapCard.tsx";
import { beers } from "~/data/beers.ts";

export default function Index() {
  return (
    <div className="h-screen flex items-center justify-center">
      <div className="w-full max-w-[1500px] px-12 py-10 grid grid-cols-2 content-evenly gap-x-16 mb-12 h-full">
        {beers.map((beer, index) => (
          <div
            key={beer.number}
            className={index === beers.length - 1 && beers.length % 2 !== 0 ? "col-span-2 flex justify-center" : ""}
          >
            <TapCard beer={beer} />
          </div>
        ))}
      </div>
    </div>
  );
}
