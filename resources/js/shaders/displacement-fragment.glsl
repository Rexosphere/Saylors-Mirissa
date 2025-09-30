uniform float time;
uniform float progress;
uniform sampler2D texture1;
uniform sampler2D texture2;
uniform sampler2D displacement;
uniform vec4 resolution;

varying vec2 vUv;

void main() {
    vec2 newUV = (vUv - vec2(0.5)) * resolution.zw + vec2(0.5);

    vec4 disp = texture2D(displacement, newUV);
    vec2 dispVec = vec2(disp.r, disp.g);

    vec2 distortedPosition1 = newUV + (dispVec * progress * 0.3);
    vec2 distortedPosition2 = newUV + (dispVec * (1.0 - progress) * 0.3);

    vec4 _texture1 = texture2D(texture1, distortedPosition1);
    vec4 _texture2 = texture2D(texture2, distortedPosition2);

    vec4 finalTexture = mix(_texture1, _texture2, progress);

    gl_FragColor = finalTexture;
}