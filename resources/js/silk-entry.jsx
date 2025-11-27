import React from 'react';
import { createRoot } from 'react-dom/client';
import Silk from './components/Silk';
import '../css/app.css';

// Kleine helper: split text per character met delay
const SplitText = ({ text, delayOffset = 0 }) => (
  <span aria-label={text}>
    {text.split('').map((char, index) => (
      <span
        key={index}
        style={{
          display: 'inline-block',
          opacity: 0,
          animation: 'splitFadeUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards',
          animationDelay: `${delayOffset + index * 0.03}s`,
        }}
      >
        {char === ' ' ? '\u00A0' : char}
      </span>
    ))}
  </span>
);

const AnimatedTitle = ({ line1, line2 }) => {
  const line1Length = line1?.length || 0;

  return (
    <h1 className="text-4xl md:text-6xl text-white font-extrabold text-center mb-6 leading-tight">
      <SplitText text={line1} />
      <br />
      <SplitText text={line2} delayOffset={line1Length * 0.03 + 0.2} />
    </h1>
  );
};

document.addEventListener('DOMContentLoaded', () => {
  // 1) Silk background
  const silkEl = document.getElementById('silk-root');
  if (silkEl) {
    const silkRoot = createRoot(silkEl);
    silkRoot.render(
      <Silk
        speed={5}
        scale={0.9}
        color="#9c7448"
        noiseIntensity={1.5}
        rotation={0}
      />
    );
  }

  // 2) SplitText title
  const titleEl = document.getElementById('animated-title-root');
  if (titleEl) {
    const { line1, line2 } = titleEl.dataset;
    const titleRoot = createRoot(titleEl);

    titleRoot.render(
      <AnimatedTitle
        line1={line1 || 'Slimme software.'}
        line2={line2 || 'Slimme groei.'}
      />
    );
  }
});
